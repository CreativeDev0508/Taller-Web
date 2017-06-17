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


function validarPais($id){ 
    // $id representa el pais al cual quiero viajar
    // $sesion representa el pais en el que estoy
    // $lugar representa los paises donde esta el criminal

    // Traigo al criminal
    $criminal = App\Criminal::find(Auth::User()->idCriminal);

    // Me devuelve el id del pais en el que esta el usuario
    $sesion = session('pais');
    
    // Desarmo el array de los paises donde se encuentra
    $lugar = explode(',', $criminal->ubicacion); 



    for($i=0; $i<5 ; $i++){
        
        if($lugar[$i] == $sesion){
            if($lugar[$i] != $lugar[4]){
                if($lugar[$i+1] == $id){
                    return true;
                 }
                }else return true;
        } 
    }

    return false;
}


