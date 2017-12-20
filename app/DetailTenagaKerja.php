<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTenagaKerja extends Model
{
    //
    protected $table = 'detail_tenaga_kerja';

    public function profile(){
        return $this->belongsTo('App\ProfilTenagaKerja','id_profil_tenaga_kerja');
    }
}
