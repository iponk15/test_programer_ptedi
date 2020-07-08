<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    public $timestamps    = false;
    protected $table      = 'biodata';
    protected $primaryKey = 'bio_id';
    protected $fillable   = [
        'bio_user_id',
        'bio_nama',
        'bio_posisi_lamar',
        'bio_ktp',
        'bio_agama',
        'bio_tempat_lahir',
        'bio_tgl_lahir',
        'bio_jk',
        'bio_gol_darah',
        'bio_status',
        'bio_alamat_ktp',
        'bio_alamat_tinggal',
        'bio_email',
        'bio_telp',
        'bio_orng_kontak',
        'bio_skill',
        'bio_ditempatkan',
        'bio_penghasilan'
    ];
}
