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
            'bandera' => "linkImg",
            'descripcion' => "Breve descripcion del pais",
            'indicioUno' => "No logre verle la cara, pero lo escuche hablar mucho sobre ir al Pais del Mejor Asado",
            'indicioDos' => "No logre verle la cara, pero lo escuche hablar mucho sobre ir al Pais del Mejor Asado",
            'indicioTres' => "No logre verle la cara, pero lo escuche hablar mucho sobre ir al Pais del Mejor Asado",
        ]);

        App\Pais::create([
            'nombre' => "Brasil",
            'bandera' => "linkImg",
            'descripcion' => "Breve descripcion del pais",
            'indicioUno' => "No logre verle la cara, pero lo escuche nombrar entusiasmadamente sobre los Carvanales y la Alegria",
            'indicioDos' => "No logre verle la cara, pero lo escuche nombrar entusiasmadamente sobre los Carvanales y la Alegria",
            'indicioTres' => "No logre verle la cara, pero lo escuche nombrar entusiasmadamente sobre los Carvanales y la Alegria",
        ]);

        App\Pais::create([
            'nombre' => "Uruguay",
            'bandera' => "linkImg",
            'descripcion' => "Breve descripcion del pais",
            'indicioUno' => "No logre verle la cara, pero lo escuche nombrar sobre ir a conocer el pais del mate",
            'indicioDos' => "No logre verle la cara, pero lo escuche nombrar sobre ir a conocer el pais del mate",
            'indicioTres' => "No logre verle la cara, pero lo escuche nombrar sobre ir a conocer el pais del mate",
        ]);

        App\Pais::create([
            'nombre' => "Estados Unidos",
            'bandera' => "linkImg",
            'descripcion' => "Breve descripcion del pais",
            'indicioUno' => "No logre verle la cara, pero lo escuche hablar bastante nervioso sobre si no va a ser deportado por la seguridad de la Aduana de Trump",
            'indicioDos' => "No logre verle la cara, pero lo escuche hablar bastante nervioso sobre si no va a ser deportado por la seguridad de la Aduana de Trump",
            'indicioTres' => "No logre verle la cara, pero lo escuche hablar bastante nervioso sobre si no va a ser deportado por la seguridad de la Aduana de Trump",
        ]);

        App\Pais::create([
            'nombre' => "Alemania",
            'bandera' => "linkImg",
            'descripcion' => "Breve descripcion del pais",
            'indicioUno' => "No logre verle la cara, pero lo escuche nombrar sobre un viaje al muro mas famoso del mundo",
            'indicioDos' => "No logre verle la cara, pero lo escuche nombrar sobre un viaje al muro mas famoso del mundo",
            'indicioTres' => "No logre verle la cara, pero lo escuche nombrar sobre un viaje al muro mas famoso del mundo",
        ]);
    }
}
