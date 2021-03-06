<?php

namespace App\Http\Controllers\MasterData\Portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;
use App\Models\Pendidikan;
use Validator;
use Hashids;
use Auth;
use DB;

class EducationController extends Controller
{
    private $route = 'education';
    private $path  = 'masterdata.portofolio.education';

    function __construct(){
        // put your magic
    }

    public function index(){
        $data = [
            'pagetitle'    => 'Page Education',
            'cardTitle'    => 'Card Education',
            'cardSubTitle' => 'List Data Education',
            'cardIcon'     => 'flaticon2-list-3',
            'breadcrumb'   => ['Index' => route($this->route . '.index')],
            'route'        => $this->route
        ];

        return view ($this->path.'.index', $data);
    }

    function ktable(Request $request){
        $post    = $request->input();
        $getData = Pendidikan::selectRaw('pendidikan_id, pendidikan_nama, pendidikan_catatan, pendidikan_order, pendidikan_status, pendidikan_lastupdate, pendidikan_created_date')->where('pendidikan_created_by', Auth::user()->id);
        $jmlData = Pendidikan::selectRaw('count(*) AS jumlah');
        $paging  = $post['pagination'];
        $search  = (!empty($post['query']) ? $post['query'] : null);

        if( isset($post['sort']) ){
            $getData->orderBy($post['sort']['field'], $post['sort']['sort']);
        }else{
            $getData->orderBy('pendidikan_order', 'ASC');
        }
        
        if(!empty($search)){
            foreach ($search as $value => $param) {
                if($value === 'generalSearch'){
                    $getData->whereRaw("(pendidikan_nama LIKE '%".$param."%' OR pendidikan_catatan LIKE '%".$param."%')");
                    $jmlData->whereRaw("(pendidikan_nama LIKE '%".$param."%' OR pendidikan_catatan LIKE '%".$param."%')");
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
            $rowIds[]          = $value->pendidikan_id;
            $data['records'][] = [
                'RecordID'           => $value->pendidikan_id,
                'no'                 => (string)$i,
                'pendidikan_nama'    => $value->pendidikan_nama,
                'pendidikan_catatan' => $value->pendidikan_catatan,
                'pendidikan_order'   => $value->pendidikan_order,
                'status'             => intval($value->pendidikan_status),
                'lastupdate'         => date('D, d F Y H:i', strtotime($value->pendidikan_lastupdate)),
                'action'             => '<div class="dropdown dropdown-inline">
                                            <button type="button" class="btn btn-clean btn-icon btn-sm" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-theme="dark" title="Ubah Status">
                                                <i class="flaticon-cogwheel-1 text-dark"></i>
                                            </button>
                                            <div class="dropdown-menu" style="">
                                                '.( $value->pendidikan_status == 0 || $value->pendidikan_status == 99 ? '<a onClick="return f_action(this, event, 1)" class="dropdown-item" href="'. route($this->route . '.changeStatus', ['id' => Hashids::encode($value->pendidikan_id), 'status' => 1]) .'">Active</a>' : '' ).'
                                                '.( $value->pendidikan_status == 1 || $value->pendidikan_status == 99 ? '<a onClick="return f_action(this, event, 0)" class="dropdown-item" href="'. route($this->route . '.changeStatus', ['id' => Hashids::encode($value->pendidikan_id), 'status' => 0]) .'">Inactive</a>' : '').'
                                                '.( $value->pendidikan_status == 0 || $value->pendidikan_status == 1 ? '<a onClick="return f_action(this, event, 99)" class="dropdown-item" href="'. route($this->route . '.changeStatus', ['id' => Hashids::encode($value->pendidikan_id), 'status' => 99]) .'">Soft Delete</a>' : '' ).'
                                            </div>
                                            <a href="'. route($this->route . '.edit', ['id' => Hashids::encode($value->pendidikan_id)]) .'" class="btn btn-icon btn-clean btn-sm mr-2 ajaxify" data-toggle="tooltip" data-theme="dark" title="Edit"><i class="flaticon-edit text-warning"></i></a>'.
                                            ( $value->pendidikan_status == 99 
                                                ? '<a href="'. route($this->route . '.delete', ['id' => Hashids::encode($value->pendidikan_id)]) .'" onClick="return f_action(this, event)" class="btn btn-icon btn-clean btn-sm mr-2" data-toggle="tooltip" data-theme="dark" title="Delete"><i class="flaticon-delete text-danger"></i></a>'
                                                : ''
                                            ).
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
            'pagetitle'    => 'Page Pendidikan',
            'cardTitle'    => 'Card Pendidikan',
            'cardSubTitle' => 'Form tambah pendidikan',
            'cardIcon'     => 'flaticon-file-1',
            'breadcrumb'   => ['Index' => route($this->route . '.index'), 'Show' => route($this->route . '.show')],
            'route'        => $this->route
        ];

        return view($this->path . '.show', $data);
    }

    function store(Request $request){
        $post = $request->input();

        $validator = Validator::make(
            $post,
            [
                'pendidikan_nama'    => 'required',
                'pendidikan_catatan' => 'required',
                'pendidikan_order'   => 'required|unique:pendidikan',
            ],
            [
                'pendidikan_nama.required'    => 'Sekola / Universitas tidak boleh kosong',
                'pendidikan_catatan.required' => 'Jenjang tidak boleh kosong',
                'pendidikan_order.required'   => 'Urutan tidak boleh kosong',
                'pendidikan_order.unique'     => 'No urutan sudah dipakai',
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
            $post['pendidikan_created_by']   = Auth::user()->id;
            $post['pendidikan_created_date'] = date('Y-m-d H:i:s');
            $post['pendidikan_ip']           = \Request::ip();

            Pendidikan::create($post);

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
            'pagetitle'    => 'Page Education',
            'cardTitle'    => 'Card Education',
            'cardSubTitle' => 'Form edit education',
            'cardIcon'     => 'flaticon-file-1',
            'breadcrumb'   => ['Index' => route($this->route . '.index'), 'Edit' => route($this->route . '.edit', ['id' => $id]) ],
            'route'        => $this->route,
            'id'           => $id,
            'records'      => Pendidikan::selectRaw('pendidikan_nama,pendidikan_catatan,pendidikan_order')->where('pendidikan_id', Hashids::decode($id)[0])->first()
        ];

        return view($this->path . '.edit', $data);
    }

    function update(Request $request, $id){
        $post      = $request->input();
        $validator = Validator::make(
            $post,
            [
                'pendidikan_nama'    => 'required',
                'pendidikan_catatan' => 'required',
                'pendidikan_order'   => 'required',
            ],
            [
                'pendidikan_nama.required'    => 'Sekola / Universitas tidak boleh kosong',
                'pendidikan_catatan.required' => 'Jenjang tidak boleh kosong',
                'pendidikan_order.required'   => 'Urutan tidak boleh kosong',
                'pendidikan_order.unique'     => 'No urutan sudah dipakai',
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

            $cekOrder = Pendidikan::select('pendidikan_order')
                ->whereRaw('pendidikan_id = ' . Hashids::decode($id)[0] . ' OR pendidikan_order = ' . $post["pendidikan_order"])
                ->count();
            
            if($cekOrder > 1){
                $response['status']  = 2;
                $response['message'] = 'No urut <b>'.$post['pendidikan_order'].'</b> sudah dipakai';
            }else{
                $post['pendidikan_updated_by'] = Auth::user()->id;
                $post['pendidikan_ip']         = \Request::ip();

                Pendidikan::where('pendidikan_id', Hashids::decode($id)[0])->update($post);

                DB::commit();

                $response['status']  = 1;
                $response['message'] = 'Data berhasil diupdate';
            }
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
                Pendidikan::where('pendidikan_id', Hashids::decode($id)[0])->update(['pendidikan_status' => $status]);
            }else{
                Pendidikan::whereIn('pendidikan_id', $post['ids'])->update(['pendidikan_status' => $post['status']]);
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
                Pendidikan::where('pendidikan_id', Hashids::decode($id)[0])->delete();
            }else{
                Pendidikan::whereIn('pendidikan_id', $post['ids'])->delete();
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
}
