<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    // CategorySeeder.php
    public function run(): void
    {
        $categories = ['Informatika', 'Sains', 'Novel', 'Sejarah', 'Religi'];
        foreach ($categories as $c) {
            DB::table('categories')->insert(['category' => $c]);
        }
    }
}