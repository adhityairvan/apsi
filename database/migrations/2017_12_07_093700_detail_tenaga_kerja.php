<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetailTenagaKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detail_tenaga_kerja',function (Blueprint $table){
            $table->increments('id');
            $table->integer('id_profil_tenaga_kerja');
            $table->string('deskripsi');
            $table->string('urlImage1')->default('#');
            $table->string('urlImage2')->default('#');
            $table->string('urlImage3')->default('#');
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
        Schema::dropIfExists('detail_tenaga_kerja');
    }
}
