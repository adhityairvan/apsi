<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfilTenagaKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profil_tenaga_kerja', function (Blueprint $table) {
           $table->increments('id');
           $table->integer('akun_id');
           $table->string('nama_pegawai');
           $table->string('nomorKTP_pegawai');
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
        Schema::dropIfExists('profil_tenaga_kerja');
    }
}
