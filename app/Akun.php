<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
{
    //
    protected $table = 'akun';

    public function profil(){

        return $this->morphTo();
    }

    public function KontrakKerja(){
        return $this->hasMany('App\KontrakKerja','id_profil_penyewa_jasa');
    }



}
