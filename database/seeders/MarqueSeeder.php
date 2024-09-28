<?php

namespace Database\Seeders;

use App\Models\Marque;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MarqueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Marque::insert([
            [
                'id' => 1,
                'title' => 'Upcoming Interview for the position of Staff Nurse (Male/Female) (B.Sc./GNM). Online Interview will be held every week Monday to Thursday Call now: +91 8800-788-596'
            ],
            [
                'id' => 2,
                'title' => 'Here`s a draft for the opening info content of UA International`s website |'
            ]
        ]);
    }
}
