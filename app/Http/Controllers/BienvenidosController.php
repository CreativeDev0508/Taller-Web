<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BienvenidosController extends Controller
{
    public function inicio(){

        return View('bienvenida.inicio');
    }
}
