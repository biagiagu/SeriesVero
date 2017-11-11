@extends ('plantillagral')

@section('titulo')
     Agregar Pelicula
@endsection

@section ('contenido')
<form id="agregarPelicula" name="agregarPelicula" action="/peliculas/agregar" method="POST">
     {{ csrf_field() }}
   <div>
        <label for="titulo">Titulo</label>
        <input type="text" name="titulo" id="titulo"/>
   </div>
   <div>
        <label for="rating">Rating</label>
        <input type="text" name="rating" id="rating"/>
   </div>
   <div>
        <label for="premios">Premios</label>
        <input type="text" name="premios" id="premios"/>
   </div>
   <div>
        <label for="duracion">Duracion</label>
        <input type="text" name="duracion" id="duracion"/>
   </div>
   <div>
        <label>Fecha de Estreno</label>
        <select name="dia">
            <option value="">Dia</option>
            @for ($i=1; $i < 32; $i++)
               <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
        <select name="mes">
            <option value="">Mes</option>
            @for ($i=1; $i < 13; $i++)
               <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
        <select name="anio">
            <option value="">Anio</option>
            @for ($i=1900; $i < 2017; $i++)
               <option value="{{$i}}">{{$i}}</option>
            @endfor
        </select>
   </div>
   <input type="submit" value="Agregar Pelicula" name="submit"/>
    <input type="reset" value="Borrar Formulario">
</form>
@endsection
