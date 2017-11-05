<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('miPrimerRuta', function(){
     return 'Cree mi primera ruta';
});

Route::get('resultado/{numero}', function($numero){
     if ($numero%2==0) {
          return 'el numero es par';
     }else {
          return 'el numero es impar';
     }
});

Route::get('resultado2/{numero}/{numero2?}', function($numero, $numero2=null){
     if ($numero2) {
          return $numero*$numero2;
     }else{
          if ($numero%2==0) {
               return 'el numero es par';
          }else {
               return 'el numero es impar';
          }
}
});

Route::get('/pelicula/{id}', 'peliculasControler@buscarPeliculaId');
Route::get('/listadopeliculas', 'peliculasControler@listado');
Route::post('/peliculas/agregar', 'peliculasControler@agregar');
