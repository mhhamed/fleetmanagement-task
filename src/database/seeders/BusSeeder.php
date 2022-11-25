<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Process\Bus\Models\Bus;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       Bus::factory()->create([
        'name'           => 'اتوبيس 12 راكب',
        'plate_numbers'  => 1254,
        'plate_letters'  => 'ا ب ج',
        
       ]);
  
       Bus::factory()->create([
        'name'           => 'اتوبيس 12 راكب',
        'plate_numbers'  => 222,
        'plate_letters'  => 'ج ح و',
       ]);
   

    }
}
