<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Domain\Profile\Authentication\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::factory()->create();

    }
}
