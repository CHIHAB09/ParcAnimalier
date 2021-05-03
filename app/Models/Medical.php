<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medical extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'maladie',
        'arriver',
        'sortie'
    ];

    public function animalSoin()
    {
        return $this->belongTo(Animal::class);
    }
}
