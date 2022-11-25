<?php

namespace Database\Seeders;

use Domain\Core\City\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      
       City::factory()->create([
         'name'             => 'Cairo',
         'localized_name'   => 'القاهره',
        
       ]);

       City::factory()->create([
         'name'             => 'AlFayyum',
         'localized_name'   => 'الفيوم',
       ]);

       City::factory()->create([
         'name'             => 'AlMinya',
         'localized_name'   => 'المنيا',
       ]);
       
       City::factory()->create([
         'name'             => 'Asyut',
         'localized_name'   => 'اسيوط',
       ]);

    }
}
