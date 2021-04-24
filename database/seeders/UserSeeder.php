<?php

namespace Database\Seeders;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Faker\Factory;

class UserSeeder extends Seeder
{
   
    public function run()
    {
        $faker = Factory::create();
        foreach(range(1,5) as $index){
            User::create([
                'name' => $faker-> name,
                'email' => $faker->unique()->email,
                'password' => Hash::make('123456'),
            ]);
        }
    }
}
