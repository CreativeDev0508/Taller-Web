<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criminal;
use Illuminate\Support\Facades\Auth;
use App\Pais;
use Session;

class MisionController extends Controller
{
    public function inicio()
    {
        // Busco al criminal que tiene asignado el jugador
        $criminal = Criminal::find(Auth::User()->idCriminal);

        // Desarmo el array de los paises donde se encuentra
        $array = explode(',', $criminal->ubicacion); 

        // Busco la fila del primer pais que esta el ladron y le paso a la vista el nombre del pais.
        $pais = Pais::find($array[0]);

        return View ('mision.pantallaMision', ['pais' => $pais->nombre, 'idPais' => $pais->id]);
    }

    public function jefe(){

        return View('mision.jefeCapturado');
    }

    public function criminal(){

        return View('mision.criminalCapturado');
    }

    public function asignar(){
        // Traigo al criminal
        $criminal = Criminal::find(Auth::User()->idCriminal);

        // Desarmo el array de los paises donde se encuentra
        $array = explode(',', $criminal->ubicacion); 

        // Busco la fila del primer pais que esta el ladron
        $pais = Pais::find($array[0]);

        // Guardo en la session el pais en donde me encuentro
        Session::put('pais', $pais->id);

        return redirect('/comenzar');
    }

    public function orden()
    {

        return view ('vistaGeneral.generarOrden');
    }
}
