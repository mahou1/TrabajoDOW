
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  {{--  snackbars--}}
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>

  <!-- SnackbarJS plugin -->
  <script src="https://cdn.rawgit.com/FezVrasta/snackbarjs/1.1.0/dist/snackbar.min.js"></script>

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
  <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
  <script>$(document).ready(function() { $('body').bootstrapMaterialDesign(); });</script>
  <link rel="stylesheet" href="https://unpkg.com/bootstrap-material-design@4.1.1/dist/css/bootstrap-material-design.min.css" integrity="sha384-wXznGJNEXNG1NFsbm0ugrLFMQPWswR3lds2VeinahP8N0zJw9VWSopbjv2x7WCvX" crossorigin="anonymous">
  <script>
  $('body').bootstrapMaterialDesign();
</script>
{{--  --}}

    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="{{URL::asset('/css/styles.css')}}">
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
            <li class="nav-item">
              <a class="nav-link"href="/guias">Guias</a>
            </li>
            <li class="nav-item">
              <a class="nav-link"href="/ubicaciones">Ubicaciones</a>
            </li>
          </ul>
        </div>
        <ul class="navbar-nav flex-row ml-md-auto d-none d-md-flex">
          <li class="nav-item">
              <a class="nav-link " href="">Iniciar Sesion</a>
          </li>
          <li  class="nav-item">
            <a href="/usuarios/create" class="nav-link">Registrarse</a>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <div class="container mt-4">
    @yield('contenido')
  </div>
  @yield('script')
  </body>
</html>
