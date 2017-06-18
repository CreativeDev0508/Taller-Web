<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Top;

class TopController extends Controller
{
    public function inicio(){

        $tops = Top::orderBy('puntaje', 'desc')->get();
        return View('top.ranking', ['tops' => $tops]);
    }
}
