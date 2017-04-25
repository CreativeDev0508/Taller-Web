<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Criminal;
use App\User;
use Illuminate\Support\Facades\Auth;

class BienvenidoController extends Controller
{
    public function Inicio(){

        $criminal = Criminal::find(Auth::User()->idCriminal);
        $array = explode(',', $criminal->ubicacion);

        for ($i=0; $i < 1; $i++){
            $pais = $array[$i];
        }

        return View('bienvenido', ['pais' => $pais]);
    }
}
