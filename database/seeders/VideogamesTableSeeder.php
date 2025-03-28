<?php

namespace Database\Seeders;

use App\Models\Videogame;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class VideogamesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $videogames = ["assassins's creed", "halo", "Mario Bros", "fifa 25", "tetris"];
        foreach ($videogames as $videogame) {
            $newVideogame = new Videogame();
            $newVideogame->title = $videogame;
            $newVideogame->image = $faker->mimeType();
            $newVideogame->description = $faker->sentence();
            $newVideogame->category = $faker->word();
            $newVideogame->genre_id = rand(1, 8);
            $newVideogame->release_date = $faker->date('Y_m_d');

            $newVideogame->save();
        }
    }
}
