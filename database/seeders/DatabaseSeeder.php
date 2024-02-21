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
        \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'admin',
            'email' => 'a@a.com',
            'password' => Hash::make('cacaboudin'),
        ]);

        \App\Models\Hotel::factory(5)->create();
        
        \App\Models\Room::factory(10)->create();
    }
}