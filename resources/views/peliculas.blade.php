<!DOCTYPE html>
<html>
     <head>
          <meta charset="utf-8">
          <title>Listado de Peliculas</title>
     </head>
     <body>
          <ul>
               @foreach ($peliculas as $key => $titulo)
                         <li>{{$key}} {{$titulo}}</li>
               @endforeach
          </ul>
     </body>
</html>
