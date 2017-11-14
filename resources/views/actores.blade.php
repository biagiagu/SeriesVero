@extends ('plantillagral')

@section ('titulo')
    Listado de actores
@endsection

@section ('contenido')

     LLEGUE A ACTORES VIEW
     <br>
     <br>
     <ul>
          @foreach($actores as $actor)
               <li>
                    {{$actor->getNombreCompleto()}}
               </li>
          @endforeach
     </ul>

@endsection
