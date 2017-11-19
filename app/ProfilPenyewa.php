<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilPenyewa extends Model
{
    //
    protected $table = 'profil_penyewa_jasa';

    public function Akun() {
        return $this->morphOne('App\Akun','profil');
    }
}
