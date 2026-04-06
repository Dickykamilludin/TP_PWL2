<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BookshelfSeeder extends Seeder
{
    // BookshelfSeeder.php
    public function run(): void
    {
        for ($i = 1; $i <= 5; $i++) {
            DB::table('bookshelfs')->insert([
                'code' => 'RK0' . $i,
                'name' => 'Rak Lantai ' . $i,
                'created_at' => now(),
            ]);
        }
    }
}
