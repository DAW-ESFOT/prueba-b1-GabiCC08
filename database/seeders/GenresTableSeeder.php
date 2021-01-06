<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Seeder;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        Genre::truncate();
        $faker = \Faker\Factory::create();

        // Crear generos en la tabla
            Genre::create([
                'name'=> 'Action'
            ]);
        Genre::create([
            'name'=> 'Comedy'
        ]);
        Genre::create([
            'name'=> 'Drama'
        ]);
        Genre::create([
            'name'=> 'Fantasy'
        ]);
        Genre::create([
            'name'=> 'Horror'
        ]);
        Genre::create([
            'name'=> 'Mystery'
        ]);
        Genre::create([
            'name'=> 'Romance'
        ]);
        Genre::create([
            'name'=> 'Thriller'
        ]);
        Genre::create([
            'name'=> 'Western'
        ]);
    }
}
