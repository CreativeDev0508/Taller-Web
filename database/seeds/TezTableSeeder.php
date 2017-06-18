<?php

use Illuminate\Database\Seeder;

class TezTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Tez::create([
            'nombre' => "Palida",
        ]);

        App\Tez::create([
            'nombre' => "Clara",
        ]);

        App\Tez::create([
            'nombre' => "Bronceada",
        ]);

        App\Tez::create([
            'nombre' => "Oscura",
        ]);
    }
}
