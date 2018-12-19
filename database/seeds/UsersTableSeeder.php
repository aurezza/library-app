<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();

         $faker = \Faker\Factory::create();

        User::create([
            'name' => 'admin',
            'student_number' => 1234
        ]);

        for ($i = 0; $i < 5; $i++) {
            User::create([
                'name' => $faker->firstName. ' ' .$faker->lastName,
                'student_number' => $faker->numberBetween($min = 1000, $max = 2000),
            ]);
        }
    }
}
