
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
            <li class="nav-item active">
              <a class="nav-link" href="/tours">Tours<span class="sr-only">(current)</span></a>
            </li>


            @can('create',App\Tour::class)
            <li class="nav-item">
              <a class="nav-link"href="/sesiones">Sesiones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="/guias">Guias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="/ubicaciones">Ubicaciones</a>
            </li>
          @endcan
          </ul>
        </div>

        @guest
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex ">
          <li class="nav-item dropdown ">
            <a class="nav-link dropdown-toggle" href="#" id="iniciarSesion" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Iniciar Sesión
            </a>
            <div class="dropdown-menu " style="width:200px;" aria-labelledby="navbarDropdown">
              <div class="card-body">
                {{ Form::open(array('url'=>'login')) }}
                <div class="form-group">
                  <label for="user">Usuario</label>
                  <input type="text" name="user" class="form-control">
                </div>
                <div class="form-group">
                  <label for="password">Contraseña</label>
                  <input type="password" name="password" class="form-control">
                </div>

                <div class="form-group">
                  <a href="/usuarios/create" class="form-text text-muted">Registrarse</a>
                  <button type="submit" name="button" class="btn btn-primary btn-sm">Ingresar</button>
                </div>
                {{ Form::close() }}
              </div>
            </div>
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
