<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function inicio(){

        return View('top.ranking');
    }
}
