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
        User::factory(100)->create();

        User::create([
            'username' => 'Test Kouseki',
            'email' => 'kouseki@example.com',
            'role' => 'admin',
            'password'=> bcrypt('12345678'),
        ]);
    }
}
