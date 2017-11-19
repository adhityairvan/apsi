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
        Schema::create('profil_tenaga_kerja', function ( Blueprint $table ){
            $table->increments('id');
            $table->integer('nomorKTP_tenaga_kerja');
            $table->string('nama_tenaga_kerja');
            $table->string('alamat_tenaga_kerja');
            $table->date('tanggal_lahir_tenaga_kerja');
            $table->string('pendidikan_terakhir');
            $table->string('domisili');
            $table->integer('pengalaman_kerja');
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
        Schema::dropIfExists('profil_tenaga_kerja');
    }
}
