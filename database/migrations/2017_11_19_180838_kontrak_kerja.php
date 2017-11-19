<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KontrakKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('kontrak_kerja', function ( Blueprint $table ){
            $table->increments('id');
            $table->integer('id_profil_tenaga_kerja');
            $table->integer('id_profil_penyewa_jasa');
            $table->integer('nomor_dokumen');
            $table->date('tanggal_mulai_kontrak');
            $table->date('tanggal_selesai_kontrak');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::dropIfExists('kontrak_kerja');
    }
}
