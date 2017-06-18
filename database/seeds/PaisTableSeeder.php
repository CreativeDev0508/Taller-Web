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
            'indicio1' => 'Tenia el pelo de color $criminal->pelo',
            'indicio2' => "No se nada che",
            'indicio3' => "pistaPais();",
        ]);

        App\Pais::create([
            'nombre' => "Brasil",
            'imagen' => "bra.jpg",
            'descripcion' => "Breve descripcion del pais",
            'indicio1' => 'Tenia la tez de color $criminal->tez',
            'indicio2' => "No lo vi hue hue hue",
            'indicio3' => "No logre verle la cara, pero lo escuche nombrar entusiasmadamente sobre los Carvanales y la Alegria",
        ]);

        App\Pais::create([
            'nombre' => "Uruguay",
            'imagen' => "uru.jpg",
            'descripcion' => "Breve descripcion del pais",
            'indicio1' => 'Lo vi! era un sujeto del sexo $criminal->sexo',
            'indicio2' => "No lo vi vo, queres un mate?",
            'indicio3' => "No logre verle la cara, pero lo escuche nombrar sobre ir a conocer el pais del mate",
        ]);

        App\Pais::create([
            'nombre' => "Estados Unidos",
            'imagen' => "eeuu.jpg",
            'descripcion' => "Breve descripcion del pais",
            'indicio1' => 'Vi al criminal, llevaba $criminal->distintivo',
            'indicio2' => "No lo vi, tenia petroleo?",
            'indicio3' => "No logre verle la cara, pero lo escuche hablar bastante nervioso sobre si no va a ser deportado por la seguridad de la Aduana de Trump",
        ]);

        App\Pais::create([
            'nombre' => "Alemania",
            'imagen' => "alem.jpg",
            'descripcion' => "Breve descripcion del pais",
            'indicio1' => 'Si...lo vi, fue facil reconocer que su pais de procedencia era $criminal->pais',
            'indicio2' => "No lo vi gutentarg",
            'indicio3' => "No logre verle la cara, pero lo escuche nombrar sobre un viaje al muro mas famoso del mundo",
        ]);
    }
}
