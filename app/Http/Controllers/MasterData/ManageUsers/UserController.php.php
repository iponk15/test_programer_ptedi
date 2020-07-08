<?php

namespace App\Http\Controllers\MasterData\ManageUsers;

use App\Http\Controllers\Controller;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\UsersExport;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use Validator;
use App\User;
use Hashids;
use Storage;
use Auth;
use PDF;
use DB;
use App\Models\Biodata;

class UserController extends Controller
{
    private $route = 'masterdata.manageusers.user';

    function __construct(){
        // put your magic
    }

    public function index(){
        $data = [
            'pagetitle'    => 'Page User',
            'cardTitle'    => 'Card User',
            'cardSubTitle' => 'List Data User',
            'cardIcon'     => 'flaticon2-list-3',
            'breadcrumb'   => ['Index' => route($this->route . '.index')],
            'route'        => $this->route
        ];

        return view ($this->route.'.index', $data);
    }

    function ktable(Request $request){
        $post    = $request->input();
        $getData = User::selectRaw('id, name, email, created_at, status, bio_nama, bio_tempat_lahir, bio_tgl_lahir, bio_posisi_lamar');
        $getData->leftJoin('biodata','id', 'bio_user_id');
        $getData->where('role',2);

        $jmlData = User::selectRaw('count(*) AS jumlah');
        $jmlData->leftJoin('biodata','id', 'bio_user_id');
        $jmlData->where('role',2);
        
        $paging  = $post['pagination'];
        $search  = (!empty($post['query']) ? $post['query'] : null);

        if( isset($post['sort']) ){
            $getData->orderBy($post['sort']['field'], $post['sort']['sort']);
        }else{
            $getData->orderBy('created_at', 'DESC');
        }

        if(!empty($search)){
            foreach ($search as $value => $param) {
                if($value === 'generalSearch'){
                    $getData->whereRaw("(bio_nama LIKE '%".$param."%' OR bio_posisi_lamar LIKE '%".$param."%')");
                    $jmlData->whereRaw("(bio_nama LIKE '%".$param."%' OR bio_posisi_lamar LIKE '%".$param."%')");
                }else{
                    if($value !== 0 ){
                        $getData->where($value, $param);
                        $jmlData->where($value, $param);
                    }
                }
            }
            $awal = null;
        }

        $start = intval($paging['page']);
        $limit = intval($paging['perpage']);
        $awal  = ($start == 1 ? '0' : ($start * $limit) - $limit);

        $getData->offset($awal);
        $getData->limit($limit);
        $result = $getData->get();

        $jumlah          = $jmlData->first()->jumlah;
        $data['records'] = array();
        $rowIds          = [];
        $i               = 1 + $awal;

        foreach($result as $key => $value){
            $rowIds[]          = $value->id;
            $data['records'][] = [
                'no'         => (string)$i,
                'bio_nama'       => $value->bio_nama,
                'bio_tempat_lahir'      => $value->bio_tempat_lahir,
                'bio_tgl_lahir'     => date('d F Y', strtotime($value->bio_tgl_lahir)),
                'bio_posisi_lamar' => $value->bio_posisi_lamar,
                'action'     => '<div class="dropdown dropdown-inline">
                                    <a href="'. route($this->route . '.detail', ['id' => Hashids::encode($value->id)]) .'" class="btn btn-icon btn-clean btn-sm mr-2 ajaxify" data-toggle="tooltip" data-theme="dark" title="Detail"><i class="flaticon-edit text-warning"></i></a>'.
                                '</div>'
                                
            ];

            $i++;
        }

        $encode = (object)[
            'meta' => ['page' => $start, 'pages' => $limit, 'perpage' => $limit, 'total' => $jumlah, 'sort' => 'asc', 'field' => 'RecordID', 'rowIds' => $rowIds],
            'data' =>  $data['records']
        ];

        echo json_encode($encode);
    }

    function show(){
        $data = [
            'pagetitle'    => 'Page User',
            'cardTitle'    => 'Card User',
            'cardSubTitle' => 'Form tambah user',
            'cardIcon'     => 'flaticon-file-1',
            'breadcrumb'   => ['Index' => route($this->route . '.index'), 'Show' => route($this->route . '.show')],
            'route'        => $this->route
        ];

        return view($this->route . '.show', $data);
    }

    function store(Request $request){
        $post = $request->input();

        $validator = Validator::make(
            $post,
            [
                'name'     => 'required',
                'email'    => 'required|unique:users',
                'password' => 'required'
            ],
            [
                'name.required'     => 'Nama tidak boleh kosong',
                'email.required'    => 'Email tidak boleh kosong',
                'email.unique'      => 'Email sudah digunakan',
                'password.required' => 'Password tidak boleh kosong',
            ]
        );

        if ($validator->fails()) {
            $error     = '';
            $validator = $validator->errors()->messages();
            foreach ($validator as $key => $value) {
                $error .= ' - ' . $value[0] . '<br>';
            }

            $response['status']  = 2;
            $response['message'] = $error;

            echo json_encode($response);
            return;
        }

        DB::beginTransaction();

        try {
            $post['password'] = bcrypt($post['password']);
            User::create($post);

            DB::commit();

            $response['status']  = 1;
            $response['message'] = 'Data berhasil di simpan';
        } catch (\Exception $ex) {

            DB::rollback();

            $response['status']  = 0;
            $response['message'] = $ex->getMessage();
        }

        echo json_encode($response);
    }

    function edit($id){
        $data = [
            'pagetitle'    => 'Page User',
            'cardTitle'    => 'Card User',
            'cardSubTitle' => 'Form edit user',
            'cardIcon'     => 'flaticon-file-1',
            'breadcrumb'   => ['Index' => route($this->route . '.index'), 'Edit' => route($this->route . '.edit', ['id' => $id]) ],
            'route'        => $this->route,
            'id'           => $id,
            'records'      => User::selectRaw('name,email')->where('id', Hashids::decode($id)[0])->first()
        ];

        return view($this->route . '.edit', $data);
    }

    function update(Request $request, $id){
        $post      = $request->input();
        $validator = Validator::make(
            $post,
            [
                'name'  => 'required',
                'email' => 'required',
            ],
            [
                'name.required'  => 'Nama tidak boleh kosong',
                'email.required' => 'Email tidak boleh kosong',
            ]
        );

        if ($validator->fails()) {
            $error     = '';
            $validator = $validator->errors()->messages();
            foreach ($validator as $key => $value) {
                $error .= ' - ' . $value[0] . '<br>';
            }

            $response['status']  = 2;
            $response['message'] = $error;

            echo json_encode($response);
            return;
        }

        DB::beginTransaction();

        try {
            Arr::forget($post, '_token');
            
            if(!empty($post['password'])){
                $post['password'] = bcrypt($post['password']);
            }else{
                Arr::forget($post, 'password');
            }

            User::where('id', Hashids::decode($id)[0])->update($post);

            DB::commit();

            $response['status']  = 1;
            $response['message'] = 'Data berhasil diupdate';
        } catch (\Exception $ex) {

            DB::rollback();

            $response['status']  = 0;
            $response['message'] = $ex->getMessage();
        }

        echo json_encode($response);
    }

    function changeStatus(Request $request, $id, $status){
        $post = $request->input();

        DB::beginTransaction();

        try {
            if(empty($post)){
                User::where('id', Hashids::decode($id)[0])->update(['status' => $status]);
            }else{
                User::whereIn('id', $post['ids'])->update(['status' => $post['status']]);
            }

            DB::commit();

            $response['status']  = 1;
            $response['message'] = ( empty($post) ? ( $status == 1 ? 'Data berhasil di aktifkan kembali' : (  $status == 0 ? 'Data berhasil di non aktifkan' : 'Data berhasil di hapus sementara' ) ) : 'Data berhasil di update' );
        } catch (\Exception $ex) {
            DB::rollback();

            $response['status']  = 0;
            $response['message'] = $ex->getMessage();
        }

        echo json_encode($response);
    }

    function delete(Request $request, $id){
        $post = $request->input();
        DB::beginTransaction();

        try {
            if(empty($post)){
                User::where('id', Hashids::decode($id)[0])->delete();
            }else{
                User::whereIn('id', $post['ids'])->delete();
            }
            
            DB::commit();

            $response['status']  = 1;
            $response['message'] = 'Data berhasil di hapus';
        } catch (\Exception $ex) {
            DB::rollback();

            $response['status']  = 0;
            $response['message'] = $ex->getMessage();
        }

        echo json_encode($response);
    }

    function exportExcel(Request $request){
        $post = $request->input();

        Excel::store(new UsersExport($post), 'users.xlsx', 'public');

        $response['status']  = 1;
        $response['message'] = 'File berhasil di export';
        echo json_encode($response);
    }

    function exportPdf(Request $request){
        $post    = $request->input();
        $getUser = User::selectRaw('name,email,status,created_at');

        foreach ($post as $key => $value) {
            if($key == 'generalSearch'){
                if($value != NULL){
                    $getUser = $getUser->whereRaw("(name LIKE '%".$value."%' OR email LIKE '%".$value."%')");
                }
            }else{
                if($value != NULL){
                    $getUser = $getUser->where($key, $value);
                }
            }
        }

        $data = [
            'title'   => 'List data Users',
            'records' => $getUser->get()
        ];

        $pdf  = PDF::loadView( $this->route . '.viewPdf', $data);
        $file = $pdf->download()->getOriginalContent();

        Storage::disk('public')->put('users.pdf', $file);

        $response['status']  = 1;
        $response['message'] = 'File berhasil di export';
        echo json_encode($response);
    }

    public function detail($id){
        $data = [
            'pagetitle'    => 'Page User',
            'cardTitle'    => 'Card User',
            'cardSubTitle' => 'List Data User',
            'cardIcon'     => 'flaticon2-list-3',
            'breadcrumb'   => ['Index' => route($this->route . '.detail', ['id' => $id])],
            'route'        => $this->route,
            'records'      => Biodata::select('*')
                ->where('bio_user_id', Hashids::decode($id)[0])
                ->first()
        ];

        return view ($this->route.'.detail', $data);
    }
}
