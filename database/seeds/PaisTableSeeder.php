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
            'descripcion' => "<ul><li>Info 1</li><li>Info 2</li><li>Info 3</li></ul>",
            'indicio1' => "Tiene el pelo verde",
            'indicio2' => "No se nada gil",
            'indicio3' => "Se fue a fumar unos churros a Uruguay",
        ]);

        App\Pais::create([
            'nombre' => "Brasil",
            'imagen' => "bra.jpg",
            'descripcion' => "Breve descripcion del pais",
            'indicio1' => "No logre verle la cara, pero lo escuche nombrar entusiasmadamente sobre los Carvanales y la Alegria",
            'indicio2' => "No logre verle la cara, pero lo escuche nombrar entusiasmadamente sobre los Carvanales y la Alegria",
            'indicio3' => "No logre verle la cara, pero lo escuche nombrar entusiasmadamente sobre los Carvanales y la Alegria",
        ]);

        App\Pais::create([
            'nombre' => "Uruguay",
            'imagen' => "uru.jpg",
            'descripcion' => "Breve descripcion del pais",
            'indicio1' => "No logre verle la cara, pero lo escuche nombrar sobre ir a conocer el pais del mate",
            'indicio2' => "No logre verle la cara, pero lo escuche nombrar sobre ir a conocer el pais del mate",
            'indicio3' => "No logre verle la cara, pero lo escuche nombrar sobre ir a conocer el pais del mate",
        ]);

        App\Pais::create([
            'nombre' => "Estados Unidos",
            'imagen' => "eeuu.jpg",
            'descripcion' => "Breve descripcion del pais",
            'indicio1' => "No logre verle la cara, pero lo escuche hablar bastante nervioso sobre si no va a ser deportado por la seguridad de la Aduana de Trump",
            'indicio2' => "No logre verle la cara, pero lo escuche hablar bastante nervioso sobre si no va a ser deportado por la seguridad de la Aduana de Trump",
            'indicio3' => "No logre verle la cara, pero lo escuche hablar bastante nervioso sobre si no va a ser deportado por la seguridad de la Aduana de Trump",
        ]);

        App\Pais::create([
            'nombre' => "Alemania",
            'imagen' => "alem.jpg",
            'descripcion' => "Breve descripcion del pais",
            'indicio1' => "No logre verle la cara, pero lo escuche nombrar sobre un viaje al muro mas famoso del mundo",
            'indicio2' => "No logre verle la cara, pero lo escuche nombrar sobre un viaje al muro mas famoso del mundo",
            'indicio3' => "No logre verle la cara, pero lo escuche nombrar sobre un viaje al muro mas famoso del mundo",
        ]);
    }
}
