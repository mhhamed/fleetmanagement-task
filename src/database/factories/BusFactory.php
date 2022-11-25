<?php

namespace Database\Factories;

use Domain\Process\Bus\Models\Bus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class BusFactory extends Factory
{

    protected $model = Bus::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
        return [
            'name'           => fake()->name(),
            'plate_numbers'  => 1254,
            'plate_letters'  => 'ا ب ج',
            'active_state'   => 1,

        ];
    }

}
