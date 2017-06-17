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

function modal($pista){

    $modal = "<div class='modal fade' id='myModal' role='dialog'><div class='modal-dialog'><div class='modal-content'><div class='modal-header'><button type='button' class='close' data-dismiss='modal'>&times;</button><h4 class='modal-title'>Posible Pista</h4></div><div class='modal-body'><p>" . $pista . "</p></div>
   <div class='modal-footer'><button type='button' class='btn btn-default' data-dismiss='modal'>Cerrar</button></div></div></div></div>";

    return $modal;
}


