<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
     Schema::create('loans', function (Blueprint $table) {
            $table->id();
            // Tipe data ini HARUS SAMA dengan kolom npm di tabel users
            $table->unsignedBigInteger('user_npm');
            $table->date('loan_at');
            $table->date('return_at');
            $table->timestamps();

            // Pastikan referensinya ke 'npm' di tabel 'users'
            $table->foreign('user_npm')->references('npm')->on('users')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};