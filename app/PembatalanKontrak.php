<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PembatalanKontrak extends Model
{
    //
    protected $table = 'pembatalan_kontrak';

    public function kontrakKerja(){
        return $this->hasOne('App\KontrakKerja','kontrak_kerja_id');
    }
}
