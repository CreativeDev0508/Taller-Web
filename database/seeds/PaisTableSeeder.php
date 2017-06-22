<?php

use Illuminate\Database\Seeder;

class PaisTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pais::create([
            'nombre' => "Argentina",
            'imagen' => "arg.jpg",
            'descripcion' => "<ul><li>Capital: Buenos Aires </li><li>Idioma oficial: Castellano </li><li>Forma de gobierno:	República federal democrática</li><li>Órgano legislativo: Congreso de la Nación Argentina</li></ul>",
        ]);

        App\Pais::create([
            'nombre' => "Brasil",
            'imagen' => "bra.jpg",
            'descripcion' => "<ul><li>Capital: Brasilia </li><li>Idioma oficial: Portugués </li><li>Forma de gobierno:	República federal presidencial</li><li>Órgano legislativo: Congreso Nacional de Brasil</li></ul>",
        ]);

        App\Pais::create([
            'nombre' => "Uruguay",
            'imagen' => "uru.jpg",
            'descripcion' => "<ul><li>Capital: Montevideo  </li><li>Idioma oficial: Español </li><li>Forma de gobierno:	República presidencialista</li><li>Órgano legislativo: Asamblea General de Uruguay</li></ul>",
        ]);

        App\Pais::create([
            'nombre' => "Estados Unidos",
            'imagen' => "eeuu.jpg",
            'descripcion' => "<ul><li>Capital: Washington D. C. </li><li>Idioma oficial: Ingles </li><li>Forma de gobierno:	República federal constitucional</li><li>Órgano legislativo: Congreso de los Estados Unidos</li></ul>",
        ]);

        App\Pais::create([
            'nombre' => "Alemania",
            'imagen' => "alem.jpg",
            'descripcion' => "<ul><li>Capital: Berlín </li><li>Idioma oficial: Alemán </li><li>Forma de gobierno: República federal parlamentaria</li><li>Órgano legislativo: Bundesrat</li></ul>",
        ]);
    }
}
