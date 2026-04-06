<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 50; $i++) {
            // Aturan NPM: 55201 | Angkatan (21-25) | Urutan (001-050)
            $angkatan = $faker->numberBetween(21, 25);
            $urutan = str_pad($i, 3, '0', STR_PAD_LEFT);
            $npm = "55201" . $angkatan . $urutan;

            DB::table('users')->insert([
                'npm' => $npm,
                'username' => $faker->unique()->userName,
                'first_name' => $faker->firstName,
                'last_name' => $faker->lastName,
                'email' => $faker->unique()->safeEmail,
                'password' => Hash::make('password'),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}