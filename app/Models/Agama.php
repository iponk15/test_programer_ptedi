<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Agama extends Model
{
    public $timestamps    = false;
    protected $table      = 'agama';
    protected $primaryKey = 'agama_id';
    protected $fillable   = [
        'agama_nama',
        'agama_deskripsi',
        'agama_status',
        'agama_created_by',
        'agama_created_date',
        'agama_updated_by',
        'agama_lastupdate',
        'agama_ip'
    ];
}
