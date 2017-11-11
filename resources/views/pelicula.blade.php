@extends ('plantillagral')

@section ('titulo')
    Pelicula seleccionada
@endsection

@section('contenido')
    <h1>La pelicula seleccionada es:</h1>
    <br>
    <h2>{{$pelicula}}</h2>
@endsection