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
            'bandera' => "linkImg",
            'descripcion' => "Breve descripcion del pais",
        ]);

        App\Pais::create([
            'nombre' => "Brasil",
            'bandera' => "linkImg",
            'descripcion' => "Breve descripcion del pais",
        ]);

        App\Pais::create([
            'nombre' => "Uruguay",
            'bandera' => "linkImg",
            'descripcion' => "Breve descripcion del pais",
        ]);
    }
}
