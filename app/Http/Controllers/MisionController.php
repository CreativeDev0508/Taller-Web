<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MisionController extends Controller
{
    public function jefe(){

        return View('mision.jefeCapturado');
    }

    public function criminal(){

        return View('mision.criminalCapturado');
    }
}
