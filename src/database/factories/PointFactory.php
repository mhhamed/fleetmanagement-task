<?php

namespace Database\Factories;

use Domain\Process\Point\Models\Point;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class PointFactory extends Factory
{

    protected $model = Point::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
      
       
        return [
            'trip_id'        => 1,
            'city_id'        => 1,
            'leaving_time'   => '12:00:00',
            'fee'            => 0,
            'sort'           => 1,
        ];
    }

 
}
