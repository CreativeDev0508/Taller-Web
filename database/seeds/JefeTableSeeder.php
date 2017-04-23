<?php

use Illuminate\Database\Seeder;

class JefeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Jefe::create([
            'nombre' => "Lucio Lucancio",
            'apodo' => "El capone",
            'pelo' => "Rubio",
            'sexo' => "Masculino",
            'distintivo' => "Tatuaje",
            'tez' => "Clara",
            'idNacionalidad' => 2,
        ]);

        App\Jefe::create([
            'nombre' => "Nuria Marela",
            'apodo' => "La Jefa",
            'pelo' => "Canoso",
            'sexo' => "Femenino",
            'distintivo' => "Ninguno",
            'tez' => "Oscura",
            'idNacionalidad' => 3,
        ]);
    }
}
