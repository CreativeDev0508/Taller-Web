<?php

use Illuminate\Database\Seeder;

class LugarTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Lugar::create([
            'imagen' => "images/aeropuerto.png",
        ]);

        App\Lugar::create([
            'imagen' => "images/biblioteca.png",
        ]);

        App\Lugar::create([
            'imagen' => "images/circo.png",
        ]);

        App\Lugar::create([
            'imagen' => "images/iglesia.png",
        ]);

        App\Lugar::create([
            'imagen' => "images/plaza.png",
        ]);

        App\Lugar::create([
            'imagen' => "images/puerto.png",
        ]);
    }
}
