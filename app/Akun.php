<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Akun extends Model
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
