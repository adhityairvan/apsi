<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Akun extends Authenticatable
{
    //
    protected $table = 'akun';

    protected $fillable = [
        'username', 'email', 'password',
    ];

    protected $hidden = ['password'];

    public function profil(){

        return $this->morphTo();
    }

}
