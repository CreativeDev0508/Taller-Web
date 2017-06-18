<?php

use Illuminate\Database\Seeder;

class DistintivoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Distintivo::create([
            'nombre' => "Cicatriz en la frente",
        ]);

        App\Distintivo::create([
            'nombre' => "Tatuaje en el brazo",
        ]);

        App\Distintivo::create([
            'nombre' => "Lunar en la mejilla",
        ]);

        App\Distintivo::create([
            'nombre' => "Bigote",
        ]);


    }
}
