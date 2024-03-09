<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Genre extends Model
{
    protected $fillable = ['nama'];

    // Relasi one-to-many dengan Film
    public function films()
    {
        return $this->hasMany(Film::class, 'genre_id', 'id');
    }
}