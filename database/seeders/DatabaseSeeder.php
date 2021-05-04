<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\{ Animal, Medical };

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /* Animal::factory()
        ->has(Medical::factory()->count(4))
        ->count(10)
        ->create(); */
        // \App\Models\User::factory(10)->create();
    }
}
