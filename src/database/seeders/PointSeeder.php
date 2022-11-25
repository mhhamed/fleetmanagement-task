<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Process\Point\Models\Point;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PointSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      
       Point::factory()->create([
        'trip_id'          => 2,
        'city_id'          => 1,
        'arriving_time'    => '07:30:00',
        'leaving_time'     => '08:00:00',
        'fee'              => 0,
        'sort'             => 1,
        'last_point'       => 0,
        'first_point'      => 1
       ]);
       Point::factory()->create([
        'trip_id'          => 2,
        'city_id'          => 2,
        'arriving_time'    => '09:45:00',
        'leaving_time'     => '10:00:00',
        'fee'              => 150,
        'sort'             => 2,
        'last_point'       => 0,
        'first_point'      => 0
       ]);
       Point::factory()->create([
        'trip_id'       => 2,
        'city_id'       => 3,
        'arriving_time' => '13:45:00',
        'leaving_time'  => '14:00:00',
        'fee'           => 200,
        'sort'          => 3,
        'last_point'    => 0,
        'first_point'   => 0

       ]);
       Point::factory()->create([
        'trip_id'       => 2,
        'city_id'       => 4,
        'arriving_time' => '21:00:00',
        'leaving_time'  => '21:00:00',
        'fee'           => 200,
        'sort'          => 4,
        'last_point'    => 1,
        'first_point'   => 0

       ]);
    
       Point::factory()->create([
         'trip_id'       => 1,
         'city_id'       => 1,
         'arriving_time' => '07:45:00',
         'leaving_time'  => '08:00:00',
         'fee'           => 0,
         'sort'          => 1,
         'last_point'    => 0,
         'first_point'   => 1
        ]);
        Point::factory()->create([
         'trip_id'       => 1,
         'city_id'       => 2,
         'arriving_time' => '09:45:00',
         'leaving_time'  => '10:00:00',
         'fee'           => 150,
         'sort'          => 2,
         'last_point'    => 0,
         'first_point'   => 0

        ]);
        Point::factory()->create([
         'trip_id'       => 1,
         'city_id'       => 3,
         'arriving_time' => '13:45:00',
         'leaving_time'  => '14:00:00',
         'fee'           => 200,
         'sort'          => 3,
         'last_point'    => 0,
         'first_point'   => 0

        ]);
        Point::factory()->create([
         'trip_id'       => 1,
         'city_id'       => 4,
         'arriving_time' => '20:45:00',
         'leaving_time'  => '21:00:00',
         'fee'           => 200,
         'sort'          => 4,
         'last_point'    => 1,
         'first_point'   => 0

        ]);
    }
}
