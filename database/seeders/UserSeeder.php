<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory;

class UserSeeder extends Seeder
{

    public function run()
    {
        $faker = Factory::create();
        foreach (range(1, 10) as $index) {
            DB::table('user')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => $faker->password
            ]);
        }
        
    }
}
