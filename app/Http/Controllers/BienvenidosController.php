<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criminal;
use Illuminate\Support\Facades\Auth;
use App\Pais;

class BienvenidosController extends Controller
{
    public function inicio(){

        // Busco al criminal que tiene asignado el jugador
        $criminal = Criminal::find(Auth::User()->idCriminal);

        // Desarmo el array de los paises donde se encuentra
        $array = explode(',', $criminal->ubicacion); 

        // Busco la fila del primer pais que esta el ladron y le paso a la vista el nombre del pais.
        $pais = Pais::find($array[0]);

        return View('bienvenida.inicio', ['pais' => $pais->nombre]);
    }
}
