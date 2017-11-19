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

}
