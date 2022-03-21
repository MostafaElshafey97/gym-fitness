<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    // 
    protected $table = 'admins';
    public $timestamps = false;

    public function setPasswordAttribute($password)
    {
        $this->attributes['password'] = \Hash::make($password);
    }
}
