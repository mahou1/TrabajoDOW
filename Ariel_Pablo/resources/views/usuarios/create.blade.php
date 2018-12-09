@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col-md-6 mb-5 dark-text text-center text-md-left">
      <h2 class="display-4 mb-0 pt-md-5 pt-5 font-weight-bold ">Registrar cuenta</h2>
    </div>

    <div class="col-md-6">
      {{Form::open(array('url'=>'/usuarios','method'=>'post'))}}
      <div class="card">
        <div class="card-body">
            <div class="md-form">
              <i class="fas fa-user prefix"></i>
              <input type="text" id="txtUser"class="form-control {{($errors->has('user')?'is-invalid':'')}}" name="user" values="{{ old('user') }}">
              @if($errors->has('user'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('user') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
              <label for="txtUser" id="txtUser">Nombre Usuario</label>
            </div>
            <div class="md-form">
              <i class="fas fa-key prefix"></i>
              <input type="text" id="txtPassword" class="form-control {{$errors->has('password')?'is-invalid':''}}" name="password">
              @if($errors->has('password'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('password') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
              <label for="txtPassword" id="txtPassword">Contraseña</label>
            </div>
            <div class="md-form">
              <i class="fas fa-key prefix"></i>
              <input type="text" id="txtpassword_comfirmation" class="form-control  {{$errors->has('password_confirmation')?'is-invalid':''}}" name="password_confirmation">
              @if($errors->has('password_confirmation'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('password_confirmation') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
              <label for="txtpassword_comfirmation" id="txtpassword_comfirmation">Repita contraseña</label>
            </div>
            <hr/>
            <div class="md-form">
              <i class="fas fa-user-tie prefix"></i>
              <input type="text"  id="txtnombre-completo" class="form-control  {{$errors->has('nombre_completo')?'is-invalid':''}}" name="nombre_completo">
              @if($errors->has('nombre_completo'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('nombre_completo') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
              <label for="txtnombre-completo" id="txtnombre-completo">Nombre</label>
            </div>
            <div class="md-form">
              <i class="fas fa-envelope prefix"></i>
              <input type="email"  id="txtCorreo"class="form-control   {{$errors->has('correo')?'is-invalid':''}}" name="correo">
              @if($errors->has('correo'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('correo') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
              <label for="txtCorreo" id="txtCorreo">Correo</label>
            </div>
            <div class="md-form">

              <i class="fas fa-birthday-cake prefix"></i>

              <input type="date" id="txtFecha-nac" class=" {{$errors->has('fecha_nac')?'is-invalid':''}} form-control" name="fecha_nac">

              @if($errors->has('fecha_nac'))
                <div class="col">
                  <div class="alert alert-danger p-0 mt-2 mb-0" role="alert">
                    <ul>
                        @foreach($errors->get('fecha_nac') as $error)
                          <li >{{$error}}</li>
                        @endforeach
                    </ul>
                  </div>

                </div>
              @endif
              {{-- <label class="col col-md-5" id="txtFecha-nac"for="txtFecha-nac">Fecha de Nacimiento</label> --}}
            </div>
            <div class="form-group">
              <i class="fas fa-genderless prefix"></i>
              <label class="col col-md-5" id="txtGenero"for="txtFecha-nac">Genero</label>
              <select  id="txtGenero" type="selected"class="custom-select form-control md-form{{$errors->has('genero')?'is-invalid':''}}" name="genero">
                <option value="" selected>Seleccione</option>
                <option value="M">Masculino</option>
                <option value="F">Femenino</option>
                <option value="O">Otro</option>
              </select>
                @if ($errors->has('genero'))
                  <div class="col-12">
                    <div class="alert alert-danger p-0 mt-2 mb-0" role="alert">
                      <ul>
                          @foreach($errors->get('genero') as $error)
                            <li >{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                  </div>
                @endif

            </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
          <button class="btn btn-dark mr-2" type="reset">Reiniciar</button>
          <button class="btn btn-primary" type=submit>Crear</button>
        </div>
      </div>
      {{Form::close()}}
    </div>
  </div>

  <hr/>



@endsection
