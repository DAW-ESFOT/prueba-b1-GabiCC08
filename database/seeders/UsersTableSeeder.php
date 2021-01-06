<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Vaciar la tabla.
        User::truncate();
        $faker = \Faker\Factory::create();

        // Crear usuarios ficticios en la tabla
        for($i = 0; $i < 10; $i++) {
            User::create([
                'name'=> $faker->firstName,
                'lastname'=> $faker->lastName,
                'document'=> $faker->sentence
            ]);
	    }
    }
}
