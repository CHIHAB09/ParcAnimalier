<?php

namespace App\Models;

use App\Models\Food;
use App\Models\Race;
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

    public function raceAnimals()
    {
        return $this->hasMany(Race::class);
    }

    public function foods()
    {
        return $this->belongsToMany(Food::class);
    }
}
