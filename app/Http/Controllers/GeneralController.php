<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pais;
use App\Criminal;
use Illuminate\Support\Facades\Auth;

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
        $paisDestino = Pais::find($id);

        // Asigno aletoriamente un numero entre el 1 y el 3 a tres variables para repartir la ubicacion de las pistas
            $n1 = rand(1,3);
            do{ $n2 = rand(1,3); }while($n2 == $n1);
            do{ $n3 = rand(1,3); }while($n3 == $n1 || $n3 == $n2);

        // Traigo la fila del criminal
        $criminal = Criminal::find(Auth::User()->idCriminal);

        // Desarmo el array de los paises donde se encuentra
        $array = explode(',', $criminal->ubicacion);
        
        // Busco la fila del primer pais que esta el ladron
        $paisLadron = Pais::find($array[0]);
        
        // Le asigno la pista a cada variable

        if($n1 == 1){ $n1 = proximoPais($criminal); }
            else if($n2 == 2){ $n2 = proximoPais($criminal); }
                else if($n3 == 3){ $n3 = proximoPais($criminal); }
        
        if($n1 == 2){ $n1 = detalleCriminal();}
            else if($n2 == 2){ $n2 = detalleCriminal();}
                else if($n3 == 2){ $n3 = detalleCriminal();}

        if($n1 == 3){ $n1 = "No encontramos nada interesante...";}
            else if($n2 == 3){ $n2 = "No encontramos nada interesante...";}
                else if($n3 == 3){ $n3 = "No encontramos nada interesante...";}

        

        // Consulto si el pais al cual viajo es el proximo en el recorrido del criminal
        if(validarPais($paisDestino->id, $criminal))
        {
            // Guardo en la session el pais en donde me encuentro
            Session::put('pais', $paisDestino->id);
        }else{
            $n1 = "No encontramos nada interesante...";
            $n2 = "No encontramos nada interesante..2.";
            $n3 = "No encontramos nada interesante..3.";
        }

        return View('vistaGeneral.pantallaJuego', [
                                                    'pais' => $paisDestino,
                                                    'pista1' => $n1,
                                                    'pista2' => $n2,
                                                    'pista3' => $n3,
                                                    'criminal' => $criminal
                                                  ]);

                                                  

    }

    public function irPaisF($id){

        // Resto horas por haber viajado a un pais
            restarHoras(8);

        // Traigo la fila del pais al cual viajo
            $pais = Pais::find($id);

        // Asigno aletoriamente un numero entre el 1 y el 3 a tres variables para repartir la ubicacion de las pistas
            $n1 = rand(1,3);

            do{ $n2 = rand(1,3); }while($n2 == $n1);

            do{ $n3 = rand(1,3); }while($n3 == $n1 || $n3 == $n2);

        // Traigo al criminal
            $criminal = Criminal::find(Auth::User()->idCriminal);
        
        // Le asigno la pista a cada variable
            if($n1 == 1){ $n1 = proximoPais($criminal); }
                else if($n2 == 2){ $n2 = proximoPais($criminal); }
                    else if($n3 == 3){ $n3 = proximoPais($criminal); }
            
            if($n1 == 2){ $n1 = detalleCriminal();}
                else if($n2 == 2){ $n2 = detalleCriminal();}
                    else if($n3 == 2){ $n3 = detalleCriminal();}

            if($n1 == 3){ $n1 = "No encontramos nada interesante...";}
                else if($n2 == 3){ $n2 = "No encontramos nada interesante...";}
                    else if($n3 == 3){ $n3 = "No encontramos nada interesante...";}

            // Guardo en la session el pais en donde me encuentro
            Session::put('pais', $pais->id);


        return View('vistaGeneral.pantallaJuego', [
                                                    'pais' => $pais,
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
