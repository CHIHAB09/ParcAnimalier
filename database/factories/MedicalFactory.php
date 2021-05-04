<?php

namespace Database\Factories;

use App\Models\Medical;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Medical::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        \Bezhanov\Faker\ProviderCollectionHelper::addAllProvidersTo($faker);
        return [
            'nom'=>$this->faker->sentence,
            'maladie'=>$faker->medicine(),
            'arriver'=>$this->faker->date(),
            'sortie'=>$this->faker->date(),
            'animal_id'=>$this->faker->randomDigit()
        ];
    }
}
