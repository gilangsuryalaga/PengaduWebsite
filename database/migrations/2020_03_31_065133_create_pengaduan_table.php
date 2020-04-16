<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePengaduanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('pengaduan')){
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->increments('id_pengaduan');
            $table->date('tgl_pengaduan');
            $table->integer('id_masyarakat');
            $table->text('laporan');
            $table->string('foto');
            $table->enum('status',['0','proses','selesai']);
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
        Schema::dropIfExists('pengaduan');
    }
}
