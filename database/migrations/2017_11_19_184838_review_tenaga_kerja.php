<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ReviewTenagaKerja extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('review_tenaga_kerja', function ( Blueprint $table ){
            $table->increments('id');
            $table->integer('id_profil_penyewa_jasa');
            $table->integer('id_profil_tenaga_kerja');
            $table->longText('isi_review');
            $table->integer('rating_kinerja');
            $table->integer('rating_kepuasan');
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
        Schema::dropIfExists('review_tenaga_kerja');
    }
}
