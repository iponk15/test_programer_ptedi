<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Arr;
use Validator;
use Hashids;
use Auth;
use DB;

class EntryBiodataController extends Controller
{
    private $route = 'entrybiodata';
    
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

    function store(Request $request){
        $post      = $request->input();
        $validator = Validator::make(
            $post,
            [],
            []
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
            $post['bio_tgl_lahir'] = date('Y-m-d', strtotime($post['bio_tgl_lahir']));
            $post['bio_user_id']   = Auth::user()->id;
            Biodata::create($post);

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
}
