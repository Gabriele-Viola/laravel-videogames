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
            'No Genre'
        ];
        foreach ($genres as $genre) {
            $newGenre = new Genre();
            $newGenre->name = $genre;
            if ($genre == 'No Genre') {
                $newGenre->description = 'No Genre';
            }
            $newGenre->description = $faker->sentence();

            $newGenre->save();
        }
    }
}
