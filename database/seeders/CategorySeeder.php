<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;


class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Data list
        $datas = [
            [
                'name' => 'Graphic Design',
                'slug' => 'graphic_design',
                'keywords' => 'photoshop, illustrator, logo design, ui/ux, figma',
            ],
            [
                'name' => 'Web Development',
                'slug' => 'web_development',
                'keywords' => 'html, css, javascript, web design, web development',
            ],
            [
                'name' => 'Digital Marketing',
                'slug' => 'digital_marketing',
                'keywords' => 'seo, smm, keyword research, compitator analysis',
            ],
            [
                'name' => 'Video Editing',
                'slug' => 'video_editing',
                'keywords' => 'animation, youtube video, facebook video',
            ]
        ];

        // Creating category
        foreach ($datas as $data) {
            $role = Category::create(['name' => $data['name'], 'slug' => $data['slug'], 'keywords' => $data['keywords']]);
        }
    }
}
