<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GeneralController extends Controller
{
    public function inicio(){

        return View('vistaGeneral.inicio');
    }

    public function mapa(){

        return View('vistaGeneral.mapa');
    }

    public function orden(){

        return View('vistaGeneral.orden');
    }

    public function pistas(){

        return View('vistaGeneral.pistas');
    }

    public function ver(){

        return View('vistaGeneral.ver');
    }

    
}
