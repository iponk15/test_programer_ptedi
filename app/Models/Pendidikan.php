<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    public $timestamps    = false;
    protected $table      = 'pendidikan';
    protected $primaryKey = 'pendidikan_id';
    protected $fillable   = [
        'pendidikan_nama',
        'pendidikan_catatan',
        'pendidikan_order',
        'pendidikan_status',
        'pendidikan_created_by',
        'pendidikan_created_date',
        'pendidikan_updated_by',
        'pendidikan_lastupdate',
        'pendidikan_ip'
    ];
}
