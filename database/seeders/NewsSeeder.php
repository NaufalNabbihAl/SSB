<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //buatkan data dummy
        $news = [
            [
                'title' => 'News 1',
                'content' => 'Content News 1',
                'image' => 'news1.jpg',
            ],
            [
                'title' => 'News 2',
                'content' => 'Content News 2',
                'image' => 'news2.jpg',
            ],
            [
                'title' => 'News 3',
                'content' => 'Content News 3',
                'image' => 'news3.jpg',
            ],
        ];
        foreach ($news as $n) {
            \App\Models\News::create($n);
        }
    }
    
}
