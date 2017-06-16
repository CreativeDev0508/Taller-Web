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