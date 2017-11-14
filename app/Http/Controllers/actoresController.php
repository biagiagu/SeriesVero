<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Actor;

class actoresController extends Controller
{
    public function directory(){
      return view('actores');
    }

    /**
     * @return $this
     */
    public function listaDeActores(){
        $actores = actor::all();
        //return dd($actores);
        $data = compact('actores');

        //return dd($data);
        return view('actores', $data); //->with('data');

    }

}
