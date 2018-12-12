<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">
      <!-- Compiled and minified CSS -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">

    <title>Document</title>
</head>
<body>

  <div class="navbar-fixed">
    <nav class="green darken-4">
      <div class="nav-wrapper  container">
        <a href="#!" class="brand-logo">Patiperra</a>
        <a href="#" data-target="mobile-demo" class="sidenav-trigger">
          <i class="material-icons">menu</i>
        </a>
        <ul class="right hide-on-med-and-down">
          <li><a href="/">Inicio</a></li>
          <li><a href="/tours">Tours</a></li>
          <li><a href="#">Talleres</a></li>
          <li><a href="#">Productos</a></li>
          <li><a href="#">Quienes somos</a></li>
        </ul>
      </div>
    </nav>
  </div>

  <ul class="sidenav  blue lighten-1 white-text" id="mobile-demo">
    <li><a href="#">Tours</a></li>
    <hr/>
    <li><a href="#">Talleres</a></li>
    <hr/>
    <li><a href="#">Productos</a></li>
    <hr/>
    <li><a href="mobile.html">Quienes somos</a></li>
  </ul>


  <div class="container">
    @yield('contenido')
  </div>

  <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
  <script>
  $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  </script>
  @yield('script')
</body>
</html>
