@extends('plantillagral')

@section('titulo')
Listado de Peliculas
@endsection

@section('contenido')
     <ul>
          @forelse ($peliculas as $key => $titulo)
               <li><a href="/pelicula/{{$key}}">{{$titulo}}</a></li>
          @empty
               <p>no hay peliculas</p>
          @endforelse
     </ul>

@endsection
