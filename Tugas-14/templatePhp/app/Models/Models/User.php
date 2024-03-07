<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    // Relasi one-to-one dengan Profile
    public function profile()
    {
        return $this->hasOne(Profile::class);
    }

    // Relasi one-to-many dengan Kritik
    public function kritiks()
    {
        return $this->hasMany(Kritik::class);
    }
}