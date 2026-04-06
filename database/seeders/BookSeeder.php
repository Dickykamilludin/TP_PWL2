<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $shelfIds = DB::table('bookshelfs')->pluck('id');

        for ($i = 1; $i <= 50; $i++) {
            DB::table('books')->insert([
                'title' => $faker->sentence(3),
                'author' => $faker->name,
                'year' => $faker->year,
                'publisher' => $faker->company,
                'city' => $faker->city,
                'cover' => 'default.jpg',
                'bookshelf_id' => $faker->randomElement($shelfIds),
                'created_at' => now(),
            ]);
        }
    }
}