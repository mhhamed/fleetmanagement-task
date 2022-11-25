<?php

namespace Database\Factories;

use Domain\Core\City\Models\City;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CityFactory extends Factory
{

    protected $model = City::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
        return [
            'name'           => fake()->name(),
            'localized_name' => fake()->name(),
            'active_state'   => 1,

        ];
    }

   
}
