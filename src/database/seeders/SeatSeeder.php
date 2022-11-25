<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Process\Seat\Models\Seat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SeatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       Seat::factory(12)->create([
        'bus_id'  => 1,
        
       ]);
       Seat::factory(12)->create([
        'bus_id'  => 2,
        
       ]);
  
    
   

    }
}
