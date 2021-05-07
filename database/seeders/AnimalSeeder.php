<?php

namespace Database\Seeders;

use App\Models\Food;
use App\Models\Animal;
use Illuminate\Database\Seeder;

class AnimalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Animal::factory()->count(10)->create();

        $ids = range(1,10);

        Food::factory()->count(10)->create()->each(function ($food) use($ids)
        {
            shuffle($ids);
            $food->animals()->attach(array_slice($ids,0,rand(1,4)));
        });
    }
}
