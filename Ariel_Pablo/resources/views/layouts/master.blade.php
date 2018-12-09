<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Material Design Bootstrap</title>
  <!-- Font Awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

  <title>Document</title>
  <style >
    .titulo-form{
      color:black;font-family: Verdana;font-size: 14;}
    }
  </style>
</head>
<body>

  <nav class="navbar navbar-expand-lg  navbar-dark bg-dark scrolling-navbar fixed-top ">
    <div class="container">
      <a class="navbar-brand" href="/">Inicio</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item @if(Request::url()==url('/tours')) active @endif">
            <a class="nav-link" href="/tours">Tours</a>
          </li>

          @auth
            @if(auth()->user()->tipo==='Administrador')
              {{-- @can('create',App\Tour::class) --}}
              <li class="nav-item @if(Request::url()==url('/sesiones')) active @endif">
                <a class="nav-link"href="/sesiones">Sesiones</a>
              </li>
              <li class="nav-item @if(Request::url()==url('/guias')) active @endif">
                <a class="nav-link"href="/guias">Guias</a>
              </li>
              <li class="nav-item @if(Request::url()==url('/ubicaciones')) active @endif">
                <a class="nav-link"href="/ubicaciones">Ubicaciones</a>
              </li>
            @endif
          @endauth
        </ul>
      </div>

      @guest
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
          <li class="nav-item">
            <a class="nav-link" href="/login">Iniciar Sesión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="/usuarios/create">Registrarse</a>
          </li>

        </ul>
      @endguest
      @auth
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
          <li class="nav-item">
            <a class="nav-link"href="#">{{ Auth::user()->nombre_completo }}</a>
          </li>
          <li class="nav-item">
            <a class="nav-link"href="/logout">Salir</a>
          </li>
        </ul>
      @endauth
    </div>
  </nav>


  <div class="d-flex justify-content-center align-items-center">
    <div class="container pt-5 mt-5 mb-5">
      @yield('contenido')
    </div>
  </div>

  <!-- Footer -->
  <footer class="page-footer font-small gris pt-4">
      <div class="container">
        <ul class="list-unstyled list-inline text-center py-2">
          <li class="list-inline-item">
            <a href="/login" class="btn btn-outline-primary btn-rounded">Iniciar Sesión</a>
          </li>
          <li class="list-inline-item">
            <a href="/usuarios/create" class="btn btn-outline-white btn-rounded">Registrarse</a>
          </li>
        </ul>
      </div>
      <div class="footer-copyright text-center py-3">

      </div>
    </footer>

  </div>



  <!-- JQuery -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.15/js/mdb.min.js"></script>
@yield('script')
  </body>

  </html>
