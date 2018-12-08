
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="{{ asset('css/styles.css') }}" rel="stylesheet">

  <title>Document</title>
  <style >
    .titulo-form{
      color:black;font-family: Verdana;font-size: 14;}
    }
  </style>
</head>
<body>
  <header>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="/">Inicio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item {{Request::segment(1)=='tours'? 'active':''}}">
              <a class="nav-link" href="/tours">Tours<span class="sr-only">(current)</span></a>
            </li>
            @can('create',App\Tour::class)
            <li class="nav-item ">
              <a class="nav-link {{Request::segment(1)=='sesiones'? 'active':''}}"href="/sesiones">Sesiones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::segment(1)=='guias'? 'active':''}}"href="/guias">Guias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{Request::segment(1)=='ubicaciones'? 'active':''}}"href="/ubicaciones">Ubicaciones</a>
            </li>
            @endcan
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
  </header>
  <div class="container mt-4">
    @yield('contenido')
  </div>
  @yield('script')
  </body>
  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  @yield('script')
  </html>
