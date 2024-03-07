<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Peran extends Model
{
    protected $fillable = ['umur', 'film_id', 'cast_id', 'bio', 'alamat'];

    // Relasi many-to-one dengan Film
    public function film()
    {
        return $this->belongsTo(Film::class, 'film_id', 'id');
    }

    // Relasi many-to-one dengan Cast
    public function cast()
    {
        return $this->belongsTo(Cast::class, 'cast_id', 'id');
    }
}
