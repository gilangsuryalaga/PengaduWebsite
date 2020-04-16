<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pengaduan extends Model
{
    protected $table = 'pengaduan';
    protected $primaryKey ='id_pengaduan';

    protected $fillable = ['tgl_pengaduan','laporan','foto','kategori','status'];
}
