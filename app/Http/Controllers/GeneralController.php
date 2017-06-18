<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
use App\Criminal;
use Illuminate\Support\Facades\Auth;
use Illuminate\Session\SessionManager;
use \Crypt;
use Session;


class GeneralController extends Controller
{
    public function inicio ()
    {
        return view ('vistaGeneral.index');
    }

    public function irPais($id){

        // Le asigno a una variable el valor de la sesion
        $sesion = session('pais');
        
        // Resto horas por haber viajado a un pais
        restarHoras(8);

        // Traigo los datos del pais destino. Ejemplo: Si estoy en argentina y viajo a brasil, traigo los datos de brasil, que me los da el parametro id
        $paisDestino = Pais::find($id);

        // Traigo la fila del criminal actual que esta persiguiendo el jugador
        $criminal = Criminal::find(Auth::User()->idCriminal);

        // Desarmo el array de paises donde esta el ladron.
        $ubicacionLadron = explode(',', $criminal->ubicacion);

        // Segun la lista de ubicaciones del ladron, traigo el primer pais en el cual se supone que esta
        $paisLadron = Pais::find($ubicacionLadron[0]);

        // Creo tres variables nuevas en donde les asigno un numero entre 1 y 3 para poder guardar en ellas las pistas de forma aleatoria
            $n1 = rand(1,3);
            do{ $n2 = rand(1,3); }while($n2 == $n1);
            do{ $n3 = rand(1,3); }while($n3 == $n1 || $n3 == $n2);

        // Verifico si es el primer pais al cual viajo. Si esa condicion se cumple no tengo que verificar si el pais al que estoy ingresando es el segundo
        // en la lista del ladron ya que me daria error
        if($sesion == 0)
        {
            Session::put('pais', $paisDestino->id);
            $n1 = asignarValor($n1, $criminal);
            $n2 = asignarValor($n2, $criminal);
            $n3 = asignarValor($n3, $criminal);
        } 
            else
            {
                // En caso de que no sea el primer pais que visita el jugador, verifico si el pais al que pretende ir es el proximo en la lista del ladron
                if(validarPais($paisDestino->id, $criminal))
                {
                    // Si la validacion es correcta, y el pais al cual voy es el correcto, guardo el nuevo id de ese pais en la sesion
                    Session::put('pais', $paisDestino->id);

                    // Le asigno a las 3 variables que cree las pistas segun corresponda (Pista Falsa - Pista Atributo - Pista Proximo Pais)
                    $n1 = asignarValor($n1, $criminal);
                    $n2 = asignarValor($n2, $criminal);
                    $n3 = asignarValor($n3, $criminal);
                }
                    else
                    {
                        // Si la validacion da falso, significa que el pais que estoy tratando de ir no es el pais en el que esta el ladron, por lo tanto le doy todas pistas falsas
                        $n1 = "No encontramos nada interesante...";
                        $n2 = "No encontramos nada interesante...";
                        $n3 = "No encontramos nada interesante...";
                    }
            }
        
        // Consulto si el pais al que estoy yendo es el ultimo pais en donde se encuentra el ladron
        if(ultimoPais(session('pais'), $criminal))
        {
            Session::flash('mensaje', 'El ladron se encuentra aqui!!! Pueden intentar armar la orden de captura o utilizar tus horas restantes para volver a revisar tus pistas');
        }

        return View('vistaGeneral.pantallaJuego', [
                                                    'pais' => $paisDestino,
                                                    'pista1' => $n1,
                                                    'pista2' => $n2,
                                                    'pista3' => $n3,
                                                    'criminal' => $criminal
                                                  ]);
    }

    public function mapa(){
        $paises = Pais::All();
        return View('vistaGeneral.mapa', ['paises' => $paises]);
    }

    public function orden(){

        return View('vistaGeneral.generarOrden');
    }

    public function pistas(){

        return View('vistaGeneral.pistas');
    }

public function ver($id){

        // Traigo la fila del pais al cual viajo
        $pais = Pais::find($id);

        // Asigno aletoriamente un numero entre el 1 y el 3 a tres variables para repartir la ubicacion de las pistas
            $n1 = rand(1,3);

            do{
                $n2 = rand(1,3);
            }while($n2 == $n1);

            do{
                $n3 = rand(1,3);
            }while($n3 == $n1 || $n3 == $n2);

            // Traigo al criminal
        $criminal = Criminal::find(Auth::User()->idCriminal);
        
        // Le asigno la pista a cada variable

        if($n1 == 1){ $n1 = proximoPais(); }
            else if($n2 == 2){ $n2 = proximoPais(); }
                else if($n3 == 3){ $n3 = proximoPais(); }
        
        if($n1 == 2){ $n1 = detalleCriminal();}
            else if($n2 == 2){ $n2 = detalleCriminal();}
                else if($n3 == 2){ $n3 = detalleCriminal();}

        if($n1 == 3){ $n1 = "No encontramos nada interesante...";}
            else if($n2 == 3){ $n2 = "No encontramos nada interesante...";}
                else if($n3 == 3){ $n3 = "No encontramos nada interesante...";}

        // Consulto si el pais al cual viajo es el proximo en el recorrido del criminal
        if(validarPais($pais->id))
        {
 
            // Guardo en la session el pais en donde me encuentro
            Session::put('pais', $pais->id);

            

        }else{
            $n1 = "No encontramos nada interesante...";
            $n2 = "No encontramos nada interesante...";
            $n3 = "No encontramos nada interesante...";
        }

        return View('vistaGeneral.pantallaJuego', [
                                                    'pais' => $pais,
                                                    'pista1' => $n1,
                                                    'pista2' => $n2,
                                                    'pista3' => $n3,
                                                    'criminal' => $criminal
                                                  ]);

    }

    
}
