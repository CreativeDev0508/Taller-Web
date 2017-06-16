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

        return View('vistaGeneral.pantallaJuego', ['pais' => $pais]);
    }

    public function volverPais($id)
    {
        return redirect('VistaGeneral.pantallaJuego');
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
