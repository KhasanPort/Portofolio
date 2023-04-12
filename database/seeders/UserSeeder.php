<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // data faker indonesia
        $faker = Faker::create('id_ID');
        
        $password = bcrypt('12345');
        // membuat data dummy sebanyak 10 record
        for($x = 1; $x <= 10; $x++){
            // insert data dummy users dengan faker
            DB::table('users')->insert([
                'username' => $faker->name,
                'email' => $faker->unique()->safeEmail(),
                'password' => $password, // password
                // 'remember_token' => Str::random(10),            
                // 'email_verified_at' => now(),
            ]);
    }}
}
