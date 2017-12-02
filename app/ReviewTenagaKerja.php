<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ReviewTenagaKerja extends Model
{
    //
    protected $table = "review_tenaga_kerja";

    public function penyewa(){
        return $this->belongsTo('App\ProfilPenyewa','id_profil_penyewa_jasa');
    }

    public function tenagaKerja(){
        return $this->belongsTo('App\ProfilPTenagaKerja','id_profil_tenaga_kerja');
    }

}
