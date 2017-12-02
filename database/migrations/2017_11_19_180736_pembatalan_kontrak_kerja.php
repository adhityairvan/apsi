<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PembatalanKontrakKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('pembatalan_kontrak', function ( Blueprint $table ){
            $table->increments('id');
            $table->integer('kontrak_kerja_id');
            $table->string('alasan_pembatalan');
            $table->date('tanggal_konfirmasi');
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
        Schema::dropIfExists('pembatalan_kontrak');
    }
}
