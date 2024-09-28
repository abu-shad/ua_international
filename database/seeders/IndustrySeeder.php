<?php

namespace Database\Seeders;

use App\Models\Industry;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class IndustrySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Industry::create([
            'name' => 'Automobiles',
            'description' => 'Automobiles',
            'icon' => "assets/imgs/page/homepage1/automobile.svg"
        ]);
        Industry::create([
            'name' => 'FCMG',
            'description' => 'FCMG',
            'icon' => "assets/imgs/page/homepage1/fcmg.svg"
        ]);
        Industry::create([
            'name' => 'Healthcare',
            'description' => 'Healthcare',
            'icon' => "assets/imgs/page/homepage1/healthcare.svg"
        ]);
        Industry::create([
            'name' => 'Hospitality',
            'description' => 'Hospitality',
            'icon' => "assets/imgs/page/homepage1/hospitality.svg"
        ]);
        Industry::create([
            'name' => 'Information',
            'description' => 'Technologies',
            'icon' => "assets/imgs/page/homepage1/it.svg"
        ]);
        Industry::create([
            'name' => 'Oil And Gas',
            'description' => 'Oil And Gas',
            'icon' => "assets/imgs/page/homepage1/oil-and-gas.svg"
        ]);
        Industry::create([
            'name' => 'Construction',
            'description' => 'Construction',
            'icon' => "assets/imgs/page/homepage1/construction.svg"
        ]);
    }
}
