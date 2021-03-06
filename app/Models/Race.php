<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $fillable = [
        'genre'
    ];

    public function race()
    {
        return $this->belongTo(Animal::class);
    }

    public function cageByRaces()
    {
        return $this->hasMany(Cage::class);
    }
}
