<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Faker\Generator as Faker;

class PlatformsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $platforms = [
            [
                'name' => 'playstation',
                'color' => '#0652d4'
            ],
            [
                'name' => 'x-box',
                'color' => '#1cbf0a'
            ],
            [
                'name' => 'nintendo',
                'color' => '#e63b07'
            ],
            [
                'name' => 'PC',
                'color' => '#6b6b6b'
            ],
        ];

        foreach ($platforms as $platform) {
            $newPlatform = new Platform();
            $newPlatform->name = $platform['name'];
            $newPlatform->color = $platform['color'];
            $newPlatform->description = $faker->sentence();

            $newPlatform->save();
        }
    }
}
