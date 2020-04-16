<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tanggapan extends Model
{
    protected $table = 'tanggapan';
    protected $primaryKey ='id_tanggapan';

    protected $fillable = ['id_pengaduan','tgl_pengaduan','tanggapan','id_petugas'];
}
