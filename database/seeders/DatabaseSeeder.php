<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => Hash::make('test@admin'),
            'phone' => '0813369206357',
            'image' => 'url',
            'status' => 'Mahasiswa',
            'city' => 'jakarta',
            'country' => 'indonesia',
            'birthdate' => '2027',
            'about' => 'lorem ipsum',
        ]);
    }
}
