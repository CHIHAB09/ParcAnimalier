<?php

namespace Database\Factories;

use App\Models\Food;
use Illuminate\Database\Eloquent\Factories\Factory;
use FakerRestaurant\Provider\Restaurant;



class FoodFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Food::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $faker = \Faker\Factory::create();
        $faker->addProvider(new\FakerRestaurant\Provider\fr_FR\Restaurant($faker));
        
        return [
            'nom'=>$faker->vegetableName(),
            'quantiter'=>$this->faker->numberBetween($min = 50, $max = 200),
            'heure'=>$this->faker->dateTime(),
            'nombre_repas'=>$this->faker->numberBetween($min = 1, $max = 3)
            
        ];
    }
}
