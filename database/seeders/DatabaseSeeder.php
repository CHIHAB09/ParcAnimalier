<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{ Animal, Medical,Food };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
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

        /* Animal::factory()
        ->has(Medical::factory()->count(4))
        ->count(10)
        ->create(); */
        // \App\Models\User::factory(10)->create();
    }
}
