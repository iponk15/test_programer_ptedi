<?php

namespace App\Http\Controllers\GlobalFunction;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use DB;

class Select2Controller extends Controller
{
    function __construct(){
        // put your magic
    }

    function getData($table){
        $id     = $table . '_id';
        $nama   = $table . '_nama';
        $status = $table . '_status';
        $result = DB::table($table)
            ->select($id, $nama)
            ->where($nama, 'like', '%'.$_GET['q'].'%')
            ->where($status, '1')
            ->orderBy($nama, 'ASC')
            ->limit(5)
            ->get();

        for ($i=0; $i < count( $result ); $i++) {
            $data[$i] = [
                'id'   => $result[$i]->$id, 
                'text' => $result[$i]->$nama
            ];
        }

        echo json_encode( ['items' => $data] );
    }
}
