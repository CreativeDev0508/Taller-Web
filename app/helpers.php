<?php

function diasRestantes($horas){

   return $horas / 24;
}

function restarHoras($horas){
    $usuario = App\User::find(Auth::User()->id);
    $usuario->tiempo -= $horas;
    $usuario->save();

    return;
}

function sumarHoras($horas){
    $usuario = App\User::find(Auth::User()->id);
    $usuario->tiempo += $horas;
    $usuario->save();

    return;
}

function validarPais($id, $criminal){ 
    // $id representa el pais al cual quiero viajar
    // $sesion representa el pais en el que estoy
    // $lugar representa los paises donde esta el criminal

    // Me devuelve el id del pais en el que esta el usuario
    $sesion = session('pais');
    
    // Desarmo el array de los paises donde se encuentra
    $lugar = explode(',', $criminal->ubicacion); 

    // Verifico que el pais que le sigue sea el pais al que estoy yendo
    for($i=0; $i<5 ; $i++){if($lugar[$i] == $sesion){ if($lugar[$i] != $lugar[4]){if($lugar[$i+1] == $id){return true; }}else return true; }  }

    return false;
}


function nombrePelo($id){

    $pelo = App\Pelo::find($id);

    return $pelo->nombre;
}

function nombreTez($id){

    $tez = App\Tez::find($id);

    return $tez->nombre;
}

function nombreSexo($id){

    $sexo = App\Sexo::find($id);

    return $sexo->nombre;
}

function nombreDistintivo($id){

    $dist = App\Distintivo::find($id);

    return $dist->nombre;
}

function nombrePais($id){

    $p = App\Pais::find($id);

    return $p->nombre;
}



function proximoPais($criminal){

    // Me devuelve el id del pais en el que esta el usuario
    $sesion = session('pais');

    // Desarmo el array de los paises donde se encuentra
    $lugar = explode(',', $criminal->ubicacion); 

    // Recorro la lista hasta encontrar el proximo pais del criminal
    for($i=0; $i<5 ; $i++){if($lugar[$i] == $sesion){if($lugar[$i] != $lugar[4]){$proximo = $lugar[$i+1];} else {$proximo = $lugar[$i];} } }

    switch ($proximo) {
    case 1: /* Argentina */
        $proximo = "El ladron se fue al pais del dulce de leche y los asados";
        break;
    case 2: /* Brasil */ 
        $proximo = "El ladron se fue al pais del carnaval";
        break;
    case 3: /* Uruguay */   
        $proximo = "El ladron se fue al pais del mate y los porros";
        break;
    case 4: /* Estados Unidos */
        $proximo = "El ladron se fue al pais mas belico del mundo";
        break;
    case 5: /* Alemania */
        $proximo = "El ladron se fue al pais de la cerveza y las salchichas";
        break;
}

return $proximo;
}

// Me trae el detalle del ladron segun el pais en el que este
function detalleCriminal(){

    // Traigo al criminal
    $criminal = App\Criminal::find(Auth::User()->idCriminal);

    // Me devuelve el id del pais en el que esta el usuario
    $sesion = session('pais');

    switch ($sesion) {
    case 1: /* Argentina */
        $proximo = "Tenia el pelo de color " . nombrePelo($criminal->idPelo);
        break;
    case 2: /* Brasil */ 
        $proximo = "Tenia la tez de color " . nombreTez($criminal->idTez);
        break;
    case 3: /* Uruguay */   
        $proximo = "Lo vi! era un sujeto del sexo " . nombreSexo($criminal->idSexo);
        break;
    case 4: /* Estados Unidos */
        $proximo = "Vi al criminal, llevaba " . nombreDistintivo($criminal->idDistintivo);
        break;
    case 5: /* Alemania */
        $proximo = "Si...lo vi, fue facil reconocer que su pais de procedencia era " . nombrePais($criminal->idNacionalidad);
        break;
}

return $proximo;
}


function asignarValor($n, $criminal){
    if($n == 1)
    {
        $n = proximoPais($criminal);
        return $n;
    }

    if($n == 2)
    {
        $n = detalleCriminal();
        return $n;
    }

    if($n == 3)
    {
        $n = "No encontramos nada interesante...";
        return $n;
    }

}

function ultimoPais($pais, $criminal){

    // Desarmo el array de los paises donde se encuentra
    $lugar = explode(',', $criminal->ubicacion); 

    if($lugar[4] == $pais)
    {
        return true;
    }

    return false;
}

function calcularPuntaje($criminalSeleccionado){
    $usuario = App\User::find(Auth::User()->id);
    $puntos = $usuario->tiempo * 2;
    $usuario->record += ($usuario->tiempo * 2);

    if(Auth::User()->idCriminal == $criminalSeleccionado){
        $usuario->record += 500; 
        $usuario->criminalesCapturados ++; 
    }

    return $usuario->record;
}

function sumarPuntos($pts, $criminalSeleccionado){
    $usuario = App\User::find(Auth::User()->id);
    $usuario->record += $pts;

    if(Auth::User()->idCriminal == $criminalSeleccionado){
        $usuario->record += 500;  
    }

    $usuario->save();
}

function guardarPuntaje($pts){

    $usuario = App\User::find(Auth::User()->id);
    $usuario->record += $pts;
    $usuario->save();
}

function nuevoTop($criminalSeleccionado, $puntaje){

     $top = new App\Top;
     $top->usuario = Auth::User()->nick;
     $top->puntaje = ($puntaje / ($top->mision+1));
     $top->mision++;

     if(Auth::User()->idCriminal == $criminalSeleccionado){
        $top->criminalesCapturados++;
    }

    $top->save();
}

function actualizarTop($puntaje, $criminalSeleccionado){

    $top = App\Top::where('usuario', '=' , Auth::User()->nick)->firstOrFail();
    $top->puntaje = (($puntaje + $top->puntaje) / ($top->mision+1));
    $top->mision++;

    if(Auth::User()->idCriminal == $criminalSeleccionado){
        $top->criminalesCapturados++;
    }

    $top->save();
}

function asignarCriminal(){

    $user = App\User::find(Auth::User()->id);
    $user->idCriminal = App\Criminal::all()->random()->id;
    $user->save();
}

function existeUsuarioTop(){

    $tops = App\Top::all();

    foreach($tops as $t){

        if($t->usuario == Auth::User()->nick){
            return true;
        }
    }

    return false;
}