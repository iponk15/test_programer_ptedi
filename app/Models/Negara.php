<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Negara extends Model
{
    public $timestamps    = false;
    protected $table      = 'negara';
    protected $primaryKey = 'negara_id';
    protected $fillable   = [
        'negara_nama',
        'negara_deskripsi',
        'negara_status',
        'negara_created_by',
        'negara_created_date',
        'negara_updated_by',
        'negara_lastupdate',
        'negara_ip'
    ];
}
