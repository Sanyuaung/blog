<?php

namespace Database\Seeders;

use App\Models\Programming;
use App\Models\Tag;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tags = [
            "နည်းလမ်းများ",
            "Tutorial",
            "Tips",
            "Website",
            "FrontEnd",
            "BackEnd",
        ];
        $programmings = [
            "Php",
            "Laravel",
            "Html",
            "Css",
            "Javascript",
            "Bootstrap",
        ];
        foreach ($tags as $t) {
            Tag::create([
                'slug' => Str::slug($t),
                'name' => $t,
            ]);
        }
        foreach ($programmings as $p) {
            Programming::create([
                'slug' => Str::slug($p),
                'name' => $p,
            ]);
        }
    }
}