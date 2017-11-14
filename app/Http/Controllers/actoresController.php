<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class actoresController extends Controller
{
    public function directory(){
      return view('actores');
    }
}
