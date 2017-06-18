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
            'nombre' => "Carlos Lucania",
            'idPelo' => 1,
            'idSexo' => 1,
            'idDistintivo' => 1,
            'idTez' => 1,
            'imagen' => 'crim1.png',
            'ubicacion' => implode(',', array(1, 2, 3, 4, 5)),
            'idNacionalidad' => App\Pais::all()->random()->id,
        ]);

        App\Criminal::create([
            'nombre' => "Franco Costello",
            'idPelo' => 2,
            'idSexo' => 1,
            'idDistintivo' => 2,
            'idTez' => 2,
            'imagen' => 'crim2.png',
            'ubicacion' => implode(',', array(3, 4, 1, 2, 5)),
            'idNacionalidad' => App\Pais::all()->random()->id,
        ]);

        App\Criminal::create([
            'nombre' => "Lucas de Franco",
            'idPelo' => 3,
            'idSexo' => 1,
            'idDistintivo' => 3,
            'idTez' => 3,
            'imagen' => 'crim3.png',
            'ubicacion' => implode(',', array(5, 2, 3, 1, 4)),
            'idNacionalidad' => App\Pais::all()->random()->id,
        ]);

        App\Criminal::create([
            'nombre' => "Susana Bonanno",
            'idPelo' => 4,
            'idSexo' => 2,
            'idDistintivo' => 4,
            'idTez' => 4,
            'imagen' => 'crim4.png',
            'ubicacion' => implode(',', array(4, 1, 3, 5, 2)),
            'idNacionalidad' => App\Pais::all()->random()->id,
        ]);

        App\Criminal::create([
            'nombre' => "Martha Arellano",
            'idPelo' => 1,
            'idSexo' => 2,
            'idDistintivo' => 3,
            'idTez' => 1,
            'imagen' => 'crim5.png',
            'ubicacion' => implode(',', array(3, 5, 1, 4, 2)),
            'idNacionalidad' => App\Pais::all()->random()->id,
        ]);

        App\Criminal::create([
            'nombre' => "Maria Licciardi",
            'idPelo' => 2,
            'idSexo' => 2,
            'idDistintivo' => 2,
            'idTez' => 4,
            'imagen' => 'crim6.png',
            'ubicacion' => implode(',', array(1, 5, 2, 4, 3)),
            'idNacionalidad' => App\Pais::all()->random()->id,
        ]);

        

        
    }
}
