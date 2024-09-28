<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::create([
            'name' => 'Digital Marketing',
            'bg_image' => 'assets/imgs/page/homepage2/img-big1.png',
            'url' => "digital.marketing",
            'description' => "Digital"
        ]);

        Service::create([
            'name' => 'Digital Marketing',
            'bg_image' => 'assets/imgs/page/homepage2/img-big1.png',
            'url' => "digital.marketing",
            'description' => "Digital"
        ]);

        Service::create([
            'name' => 'Global Executive Search',
            'bg_image' => 'assets/imgs/page/homepage2/img-big2.png',
            'url' => "global.executive.search",
            'description' => "Global Executive Search"
        ]);

        Service::create([
            'name' => 'Document Attestation',
            'bg_image' => 'assets/imgs/page/homepage2/img-big3.png',
            'url' => "document.attestation",
            'description' => "Document Attestation"
        ]);

        Service::create([
            'name' => 'Skill Training And Testing',
            'bg_image' => 'assets/imgs/page/homepage2/img-big1.png',
            'url' => "skill.training.testing",
            'description' => "Skill Training And Testing"
        ]);

        Service::create([
            'name' => 'Oversease Recruitment Service',
            'bg_image' => 'assets/imgs/page/homepage2/img-big2.png',
            'url' => "overseas.recruitment.service",
            'description' => "Oversease Recruitment Service"
        ]);

        Service::create([
            'name' => 'Travel And Tourism',
            'bg_image' => 'assets/imgs/page/homepage2/img-big3.png',
            'url' => "travel.tourism",
            'description' => "Travel And Tourism"
        ]);

        Service::create([
            'name' => 'Umrah',
            'bg_image' => 'assets/imgs/page/homepage2/img-big3.png',
            'url' => "umrah",
            'description' => "Umrah"
        ]);

        Service::create([
            'name' => 'Web And App Development',
            'bg_image' => 'assets/imgs/page/homepage2/img-big3.png',
            'url' => "web.app.development",
            'description' => "Web And App Development"
        ]);
    }
}
