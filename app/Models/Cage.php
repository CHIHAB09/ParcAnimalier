<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cage extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'actif'
    ];

    public function cage()
    {
        return $this->belongTo(Race::class);
    }


}
