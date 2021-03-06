<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class KontrakKerja extends Model
{
    //
    protected $table = 'kontrak_kerja';

    public function penyewa(){
        return $this->belongsTo('App/ProfilPenyewa','id_profil_penyewa_jasa');
    }

    public function dokumenPerjanjian (){
        return $this->hasOne('App\DokumenPerjanjian');
    }

    public function pekerja(){
        return $this->belongsTo('App\ProfilTenagaKerja','id_profil_tenaga_kerja');
    }

}
