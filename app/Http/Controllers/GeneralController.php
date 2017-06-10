<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
use \Crypt;
use Session;


class GeneralController extends Controller
{
    public function irPais($id){

        // Resto horas por haber viajado a un pais
        restarHoras(8);

        // Traigo la fila del pais al cual viajo
        $pais = Pais::find($id);

        // Guardo en la session el pais en donde me encuentro
        Session::put('pais', $pais->id);

        return View('vistaGeneral.inicio', ['pais' => $pais]);
    }

    public function mapa(){

        return View('vistaGeneral.mapa');
    }

    public function orden(){

        return View('vistaGeneral.orden');
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
