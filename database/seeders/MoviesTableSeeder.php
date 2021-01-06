<?php

namespace Database\Seeders;

use App\Models\Movie;
use Illuminate\Database\Seeder;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Movie::truncate();
        $faker = \Faker\Factory::create();

        // Crear peliculas ficticias en la tabla
        for($i = 0; $i < 40; $i++) {
            Movie::create([
                'name'=> $faker->sentence($nbWords = 4, $variableNbWords = true),
                'code'=> $faker->uuid,
                'year'=> $faker->year,
                'available'=> true
            ]);
        }
    }
}
