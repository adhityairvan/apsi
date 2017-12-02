<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilTenagaKerja extends Model
{
    //
    protected $table = 'profil_tenaga_kerja';

    public function KontrakKerja (){
        return $this->hasMany('App\KontrakKerja','id_profil_tenaga_kerja');
    }

    public function booking(){
        return $this->hasOne('App\Booking','id_profil_tenaga_kerja');
    }

    public function review(){
        return $this->hasMany('App\ReviewTenagaKerja','id_profil_tenaga_kerja');
    }

}
