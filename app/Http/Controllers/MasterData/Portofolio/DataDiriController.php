<?php

namespace App\Http\Controllers\MasterData\Portofolio;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DataDiriController extends Controller
{
    private $route = 'datadiri';
    private $path  = 'masterdata.portofolio.datadiri';

    function __construct(){
        // put your magic
    }

    public function index(){
        $data = [
            'pagetitle'    => 'Data Diri',
            'cardTitle'    => '',
            'cardSubTitle' => '',
            'cardIcon'     => 'flaticon2-list-3',
            'breadcrumb'   => ['Index' => route($this->route . '.index')],
            'route'        => $this->route
        ];

        return view ($this->path.'.index', $data);
    }
}
