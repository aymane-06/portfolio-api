<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::create([
            'name' => 'Aymane Himame',
            'email' => 'aymane.himame@gmail.com',
            'password' => bcrypt('loVE0611914491'),
            // 'email_verified_at' => now(),
            'is_verified' => true,
            'verification_token' => null,
            'remember_token' => null,
            'created_at' => now(),
            'updated_at' => now()
        ]);
    }
}
