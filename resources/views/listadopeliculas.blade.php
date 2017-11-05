@extends('plantilla')

@section('titulo')
Listado de Peliculas
@endsection

@section('contenido')
     <ul>
          @foreach ($peliculas as $key => $titulo)
                    <li>{{$key}} {{$titulo}}</li>
          @endforeach
     </ul>
@endsection
