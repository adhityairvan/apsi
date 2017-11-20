<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LaporanKeuangan extends Model
{
    //
    protected $table = 'laporan_keuangan';

    public function pegawai(){
        return $this->belongsTo('App\ProfilPegawai','id_profil_pegawai');
    }
}
