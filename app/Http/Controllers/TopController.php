<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function inicio(){

        $tops = App\Top::all()->orderBy('puntaje');
        return View('top.ranking', ['tops' => $tops]);
    }
}
