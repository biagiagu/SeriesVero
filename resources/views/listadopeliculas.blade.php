@extends('plantillagral')

@section('titulo')
Listado de Peliculas
@endsection

@section('contenido')
     <ul>
          @foreach ($peliculas as $key => $titulo)
                    <li><a href="#">{{$titulo}}</a></li>
          @endforeach
     </ul>
@endsection
