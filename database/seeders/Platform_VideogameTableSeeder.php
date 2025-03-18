<?php

namespace Database\Seeders;

use App\Models\Platform;
use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Platform_VideogameTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platforms = Platform::all();
        $videogames = Videogame::all();
        foreach ($videogames as $videogame) {
            $randomPlatform = $platforms->random(rand(1, 4))->pluck('id');

            $videogame->platforms()->attach($randomPlatform);
        }
    }
}
