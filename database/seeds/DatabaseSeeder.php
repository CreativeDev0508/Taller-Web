<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(PaisTableSeeder::class);
        $this->call(LugarTableSeeder::class);
        $this->call(JefeTableSeeder::class);
        $this->call(DistintivoTableSeeder::class);                        
        $this->call(PeloTableSeeder::class);                        
        $this->call(SexoTableSeeder::class);                        
        $this->call(TezTableSeeder::class);                                           
        $this->call(CriminalTableSeeder::class); 

    }
}
