<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('id_ID');
        $npms = DB::table('users')->pluck('npm');
        $bookIds = DB::table('books')->pluck('id');

        for ($i = 1; $i <= 50; $i++) {
            // 1. Insert ke Loans
            $loanId = DB::table('loans')->insertGetId([
                'user_npm' => $faker->randomElement($npms),
                'loan_at' => now()->subDays(10),
                'return_at' => now()->addDays(7),
                'created_at' => now(),
            ]);

            // 2. Insert ke Loan Detail
            $isReturn = $faker->boolean(70); // 70% buku sudah dikembalikan
            $detailId = DB::table('loan_details')->insertGetId([
                'loan_id' => $loanId,
                'book_id' => $faker->randomElement($bookIds),
                'is_return' => $isReturn,
                'created_at' => now(),
            ]);

            // 3. Insert ke Returns jika buku sudah dikembalikan
            if ($isReturn) {
                DB::table('returns')->insert([
                    'loan_detail_id' => $detailId,
                    'charge' => $faker->boolean(20), // 20% kena denda
                    'amount' => $faker->randomElement([0, 5000, 10000]),
                    'created_at' => now(),
                ]);
            }
        }
    }
}