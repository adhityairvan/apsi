<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ProfilPenyewaJasa extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('profil_penyewa_jasa',function ( Blueprint $table ){
           $table->increments('id');
           $table->integer('id_akun');
           $table->string('nama_penyewa_jasa');
           $table->string('alamat_penyewa_jasa');
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
        Schema::dropIfExists('profil_penyewa_jasa');
    }
}
