<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    protected $fillable = ['judul', 'ringkasan', 'tahun', 'poster', 'genre_id'];

    // Relasi many-to-one dengan Genre
    public function genre()
    {
        return $this->belongsTo(Genre::class, 'genre_id', 'id');
    }

    // Relasi one-to-many dengan Kritik
    public function kritiks()
    {
        return $this->hasMany(Kritik::class, 'film_id', 'id');
    }

    // Relasi one-to-many dengan Peran
    public function perans()
    {
        return $this->hasMany(Peran::class, 'film_id', 'id');
    }
}
