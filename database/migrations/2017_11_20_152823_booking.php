<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Booking extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('booking',function( Blueprint $table ){
            $table->string('id');
            $table->date('tanggal_wawancara');
            $table->integer('id_profil_penyewa_jasa');
            $table->integer('id_profil_tenaga_kerja');
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
        Schema::dropIfExists('booking');
    }
}
