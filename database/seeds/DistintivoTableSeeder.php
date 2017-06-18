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
            'nombre' => "Bigote",
        ]);

        App\Distintivo::create([
            'nombre' => "Gorra",
        ]);

        App\Distintivo::create([
            'nombre' => "Anteojos",
        ]);

        App\Distintivo::create([
            'nombre' => "Ojos verdes",
        ]);


    }
}
