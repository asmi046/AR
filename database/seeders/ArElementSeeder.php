<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use DB;

class ArElementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Storage::disk('public')->put("ptah.jpg", file_get_contents(public_path("test/ptah.jpg")), 'public');
        Storage::disk('public')->put("ptah.mp3", file_get_contents(public_path("test/ptah.mp3")), 'public');

        Storage::disk('public')->put("pb.jpg", file_get_contents(public_path("test/pb.jpg")), 'public');
        Storage::disk('public')->put("pb.mp3", file_get_contents(public_path("test/pb.mp3")), 'public');

        DB::table("ar_elements")->insert(
            [
                [
                    'name' => "Соловей",
                    'img' => "ptah.jpg",
                    'sound' => "ptah.mp3",
                ],
                [
                    'name' => "Paint Black",
                    'img' => "pb.jpg",
                    'sound' => "pb.mp3",
                ],
            ]

        );
    }
}
