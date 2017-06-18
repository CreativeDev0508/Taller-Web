<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criminal;
use App\Top;
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

    // public function asignar(){
        
    //     // Traigo al criminal
    //     $criminal = Criminal::find(Auth::User()->idCriminal);

    //     // Desarmo el array de los paises donde se encuentra
    //     $array = explode(',', $criminal->ubicacion); 

    //     // Busco la fila del primer pais que esta el ladron
    //     $pais = Pais::find($array[0]);

    //     // Guardo en la session el pais en donde me encuentro
    //     Session::put('pais', $pais->id);

    //     return redirect('/comenzar');
    // }

        public function asignar(){
        
        Session::put('pais', 0);

        return redirect('/comenzar');
    }

    public function orden()
    {
        $criminales = Criminal::all();
        return View('vistaGeneral.generarOrden', ['criminales' => $criminales]);
    }

    public function ordenOk(Request $datos)
    {
        if(Auth::User()->puntaje == 0)
        {
            // Comparo si la id del criminal que seleccione es la misma del criminal que buscaba
            
            if(Auth::User()->idCriminal == $datos->criminalSeleccionado)
            {
                $mensaje = "Los has logrado! Haz capturado al ladron que veniamos buscando hace tiempo. Felicidades!!";
                // Si atrapo al criminal suma 500 puntos
                sumarPuntos(500);
                
            }
                else
                {
                    $mensaje = "Oh no! te haz confundido! Este no era el criminal que buscabamos.";
                }

                // Vamos a calcular el puntaje final del jugador
                // Si logro capturar al ladron sumo 500 puntos
                // Por cada hora que le sobro del tiempo, sumo 2 puntos
                
                $puntaje = calcularPuntaje();

                $top = new Top;

                $top->usuario = Auth::User()->nombre;
                $top->puntaje = $puntaje;

                $top->save();
            }
                else
                {
                    $puntaje = "No haga trampa detective!";
                    $mensaje = "No haga trampa detective!";
                }


 

        return view('mision.criminalCapturado', ['mensaje' => $mensaje, 'puntaje' => $puntaje]);
       
    }
}
