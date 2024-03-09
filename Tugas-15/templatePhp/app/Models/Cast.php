<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cast extends Model
{
    protected $fillable = ['nama', 'umur', 'bio'];
    public function perans()
    {
        return $this->hasMany(Peran::class, 'cast_id', 'id');
    }
}