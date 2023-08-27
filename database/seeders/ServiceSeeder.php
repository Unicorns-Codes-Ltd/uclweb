<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shortdescriotion ='Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.';

        $description = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque sapien velit, aliquet eget commodo nec, auctor a sapien. Nam eu neque vulputate diam rhoncus faucibus. Curabitur quis varius libero. Lorem.';
        // Data list
        $datas = [
            [
                'title' => 'Graphic Design',
                'icon' => 'solar:pie-chart-2-linear',
            ],
            [
                'title' => 'Web Development',
                'icon' => 'solar:chat-square-code-linear',
            ],
            [
                'title' => 'Digital Marketing',
                'icon' => 'solar:rocket-2-outline',
            ],
            [
                'title' => 'UI & UX Design',
                'icon' => 'solar:align-vertical-center-line-duotone',
            ]
        ];

        // Creating category
        foreach ($datas as $data) {
            $role = Service::create(['title' => $data['title'], 'icon' => $data['icon'], 'short_description' => $shortdescriotion, 'description'=> $description]);
        }
    }
}
