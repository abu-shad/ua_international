<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use Illuminate\Database\Seeder;
use Database\Seeders\BlogSeeder;
use Database\Seeders\AdminSeeder;
use Database\Seeders\MarqueSeeder;
use Database\Seeders\ServiceSeeder;
use Database\Seeders\IndustrySeeder;
use Database\Seeders\PresenceSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        $this->call([
            AdminSeeder::class,
            IndustrySeeder::class,
            ServiceSeeder::class,
            PresenceSeeder::class,
            BlogSeeder::class,
            MarqueSeeder::class
        ]);
    }
}
