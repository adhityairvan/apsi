<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DokumenPerjanjian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('dokumen_perjanjian', function ( Blueprint $table ){
            $table->increments('nomor_dokumen');
            $table->timestamp('tanggal_upload');
            $table->string('nama_dokumen');
            $table->string('lokasi_dokumen');
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
        Schema::dropIfExists('dokumen_perjanjian');
    }
}
