<?php

namespace Database\Seeders;

use App\Models\Presence;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PresenceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Presence::create([
            'location_name' => 'Saudi Arabia',
            'vacancy' => '50',
            'companies' => "98",
            'location_image' => "storage/location/1726411586.jpg",
            'url' => "saudi.arabia"
        ]);
        Presence::create([
            'location_name' => 'UAE',
            'vacancy' => '12',
            'companies' => "14",
            'location_image' => "storage/location/1726411597.jpg",
            'url' => "uae"
        ]);

        Presence::create([
            'location_name' => 'Qatar',
            'vacancy' => '90',
            'companies' => "67",
            'location_image' => "storage/location/1726411611.jpg",
            'url' => "qatar"
        ]);

        Presence::create([
            'location_name' => 'Oman',
            'vacancy' => '50',
            'companies' => "33",
            'location_image' => "storage/location/1726411643.jpg",
            'url' => "oman"
        ]);

        Presence::create([
            'location_name' => 'Kingdom Of Bahrain',
            'vacancy' => '50',
            'companies' => "242",
            'location_image' => "storage/location/1726411670.jpg",
            'url' => "kingdom.of.bahrain"
        ]);
    }
}

