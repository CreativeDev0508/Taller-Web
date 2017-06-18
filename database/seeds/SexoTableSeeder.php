<?php

use Illuminate\Database\Seeder;

class SexoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Sexo::create([
            'nombre' => "Masculino",
        ]);

        App\Sexo::create([
            'nombre' => "Femenino",
        ]);

    }
}
