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



        public function asignar(){
        
        Session::put('pais', 0);

        // Le asigno un criminal aletorio
        asignarCriminal();

        // Vuelvo a comenzar el tiempo que tiene disponible
        resetearTiempo();

        return redirect('/comenzar');
    }

    public function orden()
    {
        $criminales = Criminal::all();
        return View('vistaGeneral.generarOrden', ['criminales' => $criminales]);
    }

    public function ordenOk(Request $datos)
    {
            // Comparo si la id del criminal que seleccione es la misma del criminal que buscaba
            
            if(Auth::User()->idCriminal == $datos->criminalSeleccionado)
            {
                $mensaje = "Los has logrado! Haz capturado al ladron que veniamos buscando hace tiempo. Felicidades!!";                       
            }
                else
                {
                    $mensaje = "Oh no! te haz confundido! Este no era el criminal que buscabamos.";
                }                

                // Calculo el puntaje
                $puntaje = calcularPuntaje($datos->criminalSeleccionado);

                // Actualizo la tabla de puntaje
                if(existeUsuarioTop()){
                    actualizarTop($puntaje, $datos->criminalSeleccionado);
                    }else{
                        nuevoTop($datos->criminalSeleccionado, $puntaje); 
                        }

                // Guardo el puntaje en la tabla record del usuario
                guardarPuntaje($puntaje, $datos->criminalSeleccionado);


                

        return view('mision.criminalCapturado', ['mensaje' => $mensaje, 'puntaje' => ($puntaje - Auth::User()->record)]);
       
    }
}
