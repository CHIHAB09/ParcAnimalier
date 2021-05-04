<?php

namespace App\Models;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Food extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'quantiter',
        'heure',
        'receveur',
        'nombre_repas'
    ];


    public function animals()
    {
        return $this->belongsToMany(Animal::class);
    }
}
