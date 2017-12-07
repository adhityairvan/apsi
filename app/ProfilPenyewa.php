<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfilPenyewa extends Model
{
    //
    protected $table = 'profil_penyewa_jasa';

    protected $fillable = [
        'id_akun', 'noKTP_penyewa_jasa', 'nama_penyewa_jasa', 'alamat_penyewa_jasa'
    ];

    public function akun() {
        return $this->morphOne('App\Akun','profil');
    }

    public function booking(){
        return $this->hasMany('App\Booking','id_profil_penyewa_jasa');
    }

    public function kontrakKerja(){
        return $this->hasMany('App\KontrakKerja','id_profil_penyewa_jasa');
    }

    public function review(){
        return $this->hasMany('App\ReviewTenagaKerja','id_profil_penyewa_jasa');
    }
}
