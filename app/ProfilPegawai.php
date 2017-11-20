<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilPegawai extends Model
{
    //
    protected $table = 'pegawai';

    public function Akun(){
        return $this->morphOne('App\Akun','profil');
    }
    public function laporanKeuangan(){
        return $this->hasMany('App\LaporanKeuangan','id_profil_pegawai');
    }

}
