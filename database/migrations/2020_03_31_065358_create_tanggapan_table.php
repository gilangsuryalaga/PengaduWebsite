<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTanggapanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('tanggapan')){
        Schema::create('tanggapan', function (Blueprint $table) {
            $table->increments('id_tanggapan');
            $table->integer('id_pengaduan');
            $table->date('tgl_pengaduan');
            $table->text('tanggapan');
            $table->integer('id_petugas');
            $table->timestamps();
        });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tanggapan');
    }
}
