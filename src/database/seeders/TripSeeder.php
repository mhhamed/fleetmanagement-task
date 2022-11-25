<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Process\Trip\Models\Trip;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TripSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       Trip::factory()->create([
         'code'            => 5123,
         'classes'         => 1,
         'conditioning'    => 1,
          'tv'             => 1,
          'drink'          => 0,
          'food'           => 0,
          'wifi'           => 0,
          'bus_id'         => 1,
       ]);
       Trip::factory()->create([
         'code'            => 6123,
         'classes'         => 2,
         'conditioning'    => 1,
          'tv'             => 1,
          'drink'          => 1,
          'food'           => 1,
          'wifi'           => 1,
          'bus_id'         => 2,
       ]);
  

    }
}
