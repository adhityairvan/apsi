<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    //
    protected $table = 'booking';

    public function penyewa(){
        return $this->belongsTo('App\ProfilPenyewa');
    }

    public function tenagaKerja(){
        return $this->belongsTo('App\ProfilTenagaKerja');
    }
}
