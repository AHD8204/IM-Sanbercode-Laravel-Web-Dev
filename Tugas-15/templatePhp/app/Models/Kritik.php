<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Kritik extends Model
{
    protected $fillable = ['user_id', 'film_id', 'content', 'point'];

    // Relasi many-to-one dengan User
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    // Relasi many-to-one dengan Film
    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id', 'id');
    }
}