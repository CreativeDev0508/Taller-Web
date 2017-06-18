<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pais::create([
            'nombre' => "Argentina",
            'imagen' => "arg.jpg",
            'descripcion' => "<ul><li>Info 1</li><li>Info 2</li><li>Info 3</li></ul>",
        ]);

        App\Pais::create([
            'nombre' => "Brasil",
            'imagen' => "bra.jpg",
            'descripcion' => "Breve descripcion del pais",
        ]);

        App\Pais::create([
            'nombre' => "Uruguay",
            'imagen' => "uru.jpg",
            'descripcion' => "Breve descripcion del pais",
        ]);

        App\Pais::create([
            'nombre' => "Estados Unidos",
            'imagen' => "eeuu.jpg",
            'descripcion' => "Breve descripcion del pais",
        ]);

        App\Pais::create([
            'nombre' => "Alemania",
            'imagen' => "alem.jpg",
            'descripcion' => "Breve descripcion del pais",
        ]);
    }
}
