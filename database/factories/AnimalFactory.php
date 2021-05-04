<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;

class AnimalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Animal::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'nom'=>$this->faker->firstNameMale(),
            'sexe'=>$this->faker->randomElement(["male", "female"]),
            'age'=>$this->faker->dateTime(),
            'poids'=>$this->faker->numberBetween($min = 50, $max = 200),
            'entrer'=>$this->faker->dateTime(),
            'sortie'=>$this->faker->dateTime(),
            'actif'=>$this->faker->boolean(),
            'food_id'=>$this->faker->randomDigit()
        ];
    }
}
