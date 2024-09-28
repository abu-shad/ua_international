<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Blog::insert([
            [
                'id' => 1,
                'title' => 'Strengths and Weaknesses To Discuss in a Job Interview',
                'content' => 'Our mission is to create the world’s most sustainable healthcare company by creating high-quality healthcare products in iconic, sustainable packaging.',
                'image' => 'http://127.0.0.1:8000/storage/images/posts/rJeLjUgpoU9gSLoKvOuNxyaFt1mCogdFRHANsKy8.jpg'
            ],
            [
                'id' => 2,
                'title' => 'Interview Question: Why Dont You Have a Degree?',
                'content' => 'Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft.',
                'image' => 'http://127.0.0.1:8000/storage/images/posts/Sf8eXu7dUOQhFNU7frwuogrjPJsJglFt5A7qVd8Z.jpg'
            ],
            [
                'id' => 3,
                'title' => 'Interview Question: Why Dont You Have a Degree?',
                'content' => 'Learn how to respond if an interviewer asks you why you dont have a degree, and read example answers that can help you craft.',
                'image' => 'http://127.0.0.1:8000/storage/images/posts/wAoOVUGAZxh7dPm7ramCexnqk5kRQo8Zd0yvxBuT.jpg'
            ]
        ]);
    }
}
