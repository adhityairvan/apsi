<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanKeuangan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('laporan_keuangan',function ( Blueprint $table ){
            $table->increments('id');
            $table->integer('id_profil_pegawai');
            $table->date('tanggal_transaksi');
            $table->string('tipe_transaksi');
            $table->string('keterangan_transaksi');
            $table->string('dari/ke_transaksi');
            $table->integer('nominal_transaksi');
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
        Schema::dropIfExists('laporan_keuangan');
    }
}
