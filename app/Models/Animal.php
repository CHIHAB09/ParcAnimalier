<?php

namespace App\Models;

use App\Models\Medical;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Animal extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'sexe',
        'age',
        'poids',
        'entrer',
        'sortie',
        'actif'
    ];

    public function soins()
    {
        return $this->hasMany(Medical::class);
    }

    public function raceAnimaux()
    {
        return $this->hasMany(Race::class);
    }
}
