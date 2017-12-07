<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

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

    public function detail(){
        return $this->hasOne('App\DetailTenagaKerja','id_profil_tenaga_kerja');
    }

    public function umur(){
        return $this->tanggal_lahir_tenaga_kerja->diffInYears(Carbon::now());
    }

    protected $dates = [
        'created_at',
        'updated_at',
        'tanggal_lahir_tenaga_kerja'
    ];

}
