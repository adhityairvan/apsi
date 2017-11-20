<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DokumenPerjanjian extends Model
{
    //
    protected $table = 'dokumen_perjanjian';

    public function kontrakKerja(){
        return $this->belongsTo('App\KontrakKerja');
    }
}
