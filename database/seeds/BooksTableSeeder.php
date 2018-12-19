<?php

use App\Book;
use Illuminate\Database\Seeder;

class BooksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Book::truncate();

         $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Book::create([
                'name' => $faker->sentence,
                'number_of_pages' => $faker->numberBetween($min = 100, $max = 1000),
            ]);
        }
    }
}
