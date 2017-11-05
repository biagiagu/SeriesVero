<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>
      @yield("titulo")
    </title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/miCSS.css">
  </head>
  <body>
    <div class="container">
      <header>
           <nav class="navbar navbar-default">
               <div class="container-fluid">
                      <div class="navbar-header">
                           <a class="navbar-brand" href="#">SeriesVero</a>
                      </div>
                      <ul class="nav navbar-nav">
                             <li class="active"><a href="/">Home</a></li>
                             <li><a href="/listadopeliculas">Peliculas</a></li>
                             <li><a href="#">Series</a></li>
                             <li><a href="#">Actores</a></li>
                      </ul>
               </div>
          </nav>
      </header>
      @yield("contenido")
    </div>
  </body>
</html>
