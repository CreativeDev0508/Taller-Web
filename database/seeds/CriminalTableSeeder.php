<?php

use Illuminate\Database\Seeder;

class CriminalTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Criminal::create([
            'nombre' => "Roberto Fusil",
            'pelo' => "Marron",
            'sexo' => "Masculino",
            'distintivo' => "Ninguno",
            'tez' => "Palida",
            'pista' => "nc",
            'ubicacion' => implode(',', array('1', 1, '2', 3, '3', 4, '4', 2, '5', 5)),
            'idNacionalidad' => 1,
        ]);

        App\Criminal::create([
            'nombre' => "Luciana Cartucho",
            'pelo' => "Colorado",
            'sexo' => "Femenino",
            'distintivo' => "Tatuaje",
            'tez' => "Clara",
            'pista' => "n/c",
            'ubicacion' => implode(',', array('1', 1, '2', 3, '3', 4, '4', 2, '5', 5)),
            'idNacionalidad' => 2,
        ]);

        App\Criminal::create([
            'nombre' => "Marcos Mata",
            'pelo' => "Calvo",
            'sexo' => "Masculino",
            'distintivo' => "Cicatriz",
            'tez' => "Bronceada",
            'pista' => "n/c",
            'ubicacion' => implode(',', array('1', 1, '2', 3, '3', 4, '4', 2, '5', 5)),
            'idNacionalidad' => 3,
        ]);

        
    }
}
