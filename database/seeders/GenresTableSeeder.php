<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $genres = [
            'Azione',
            'Avventura',
            'Gioco di ruolo (rpg)',
            'Strategia',
            'Simulazione',
            'Sport e Corse',
            'Puzzle e Party Game',
            'Arcade e Retrò',

        ];
        foreach ($genres as $genre) {
            $newGenre = new Genre();
            $newGenre->name = $genre;
            $newGenre->description = $faker->sentence();
            $newGenre->logo = $faker->mimeType();

            $newGenre->save();
        }
    }
}
