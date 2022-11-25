<?php

namespace Database\Factories;

use Domain\Process\Seat\Models\Seat;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class SeatFactory extends Factory
{

    protected $model = Seat::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
        return [
            'unique_id'      => fake()->unique()->numberBetween(1,50),
            'bus_id'         => 1,

        ];
    }

 
}
