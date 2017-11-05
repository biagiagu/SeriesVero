<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class peliculasControler extends Controller
{
     public function agregar() {
           return view("agregarPelicula");
         }

    function buscarPeliculaId($id){
         $peliculas=[
              1=>'Toy Story',
              2=>'Buscando a Nemo',
              3=>'Avatar',
              4=>'StarWars V',
              5=>'UP',
              6=>'Mary and Max'
         ];
        return 'La Pelicula elegida es: '.$peliculas[$id];


         //return view('peliculas', $peliculas[$id]);
         }

     /*function buscarPeliculaNombre($nombre){
          $peliculas=[
              1=>'Toy Story',
              2=>'Buscando a Nemo',
              3=>'Avatar',
              4=>'StarWars V',
              5=>'UP',
              6=>'Mary and Max'
         ];

         foreach ($peliculas as $key => $titulo) {
              if ($nombre) {
                   # code...
              }
         }
    }*/

    public function listado(){
         $peliculas=[
             1=>'Toy Story',
             2=>'Buscando a Nemo',
             3=>'Avatar',
             4=>'StarWars V',
             5=>'UP',
             6=>'Mary and Max'
         ];
         $data = compact("peliculas");

         return view("listadoPeliculas", $data);

    }



}
