<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

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
             'user_id' => '1',
             'role' => '1',
             'studentId' => '1234567890',
             'department' => 'CITC',
             'year_section' => '3-3R2',
             'email' => 'test@example.com',
             'password' => bcrypt('password') //password
         ]);
    }
}
