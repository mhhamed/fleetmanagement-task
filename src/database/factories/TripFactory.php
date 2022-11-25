<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Domain\Process\Trip\Models\Trip;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class TripFactory extends Factory
{

    protected $model = Trip::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code'            => 6123,
            'classes'         => 2,
            'conditioning'    => 1,
             'tv'             => 1,
             'drink'          => 1,
             'food'           => 0,
             'wifi'           => 0,
             'bus_id'         => 1,

        ];
    }

}
