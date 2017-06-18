<?php

use Illuminate\Database\Seeder;

class PeloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pelo::create([
            'nombre' => "Negro",
        ]);

        App\Pelo::create([
            'nombre' => "Rubio",
        ]);

        App\Pelo::create([
            'nombre' => "Colorado",
        ]);

        App\Pelo::create([
            'nombre' => "Canoso",
        ]);
    }
}
