<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
{
    \App\Models\User::create([
        'name' => 'Admin Master',
        'email' => 'admin@gmail.com',
        'password' => bcrypt('12345678'),
        'role' => 'admin',
    ]);

    \App\Models\User::create([
        'name' => 'Faldy User',
        'email' => 'user@gmail.com',
        'password' => bcrypt('12345678'),
        'role' => 'user',
    ]);
}
}
