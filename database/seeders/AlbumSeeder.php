<?php

namespace Database\Seeders;
use App\Models\Album;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AlbumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $addablealbums = ['Our office','Vacation','Events','Seminar','Awards'];

        foreach ($addablealbums as $addablealbum) {
            $album = Album::create([
                'name' => $addablealbum
            ]);
        }
    }
}
