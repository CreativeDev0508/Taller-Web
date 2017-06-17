<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
use \Crypt;
use Session;


class GeneralController extends Controller
{
    public function inicio ()
    {
        return view ('vistaGeneral.index');
    }

    public function irPais($id){

        // Resto horas por haber viajado a un pais
        restarHoras(8);

        // Traigo la fila del pais al cual viajo
        $pais = Pais::find($id);

        // Guardo en la session el pais en donde me encuentro
        Session::put('pais', $pais->id);

        // Asigno aletoriamente un numero entre el 1 y el 3 a tres variables para repartir la ubicacion de las pistas
        $n1 = rand(1,3);

        do{
            $n2 = rand(1,3);
        }while($n2 == $n1);

        do{
            $n3 = rand(1,3);
        }while($n3 == $n1 || $n3 == $n2);

        // Le asigno la pista a cada variable
        $pista = "indicio" . $n1;        
        $n1 = $pais->$pista;

        $pista = "indicio" . $n2;        
        $n2 = $pais->$pista;

        $pista = "indicio" . $n3;        
        $n3 = $pais->$pista;

        return View('vistaGeneral.pantallaJuego', [
                                                    'pais' => $pais,
                                                    'pista1' => $n1,
                                                    'pista2' => $n2,
                                                    'pista3' => $n3
                                                  ]);

    }

    public function mapa(){

        return View('vistaGeneral.mapa');
    }

    public function orden(){

        return View('vistaGeneral.generarOrden');
    }

    public function pistas(){

        return View('vistaGeneral.pistas');
    }

    public function ver(){

        // Recupero desde la sesion el id del pais
        $id = Session::get('pais');

        // Traigo la fila del pais al cual viajo
        $pais = Pais::find($id);

        return View('vistaGeneral.inicio', ['pais' => $pais]);
    }

    
}
