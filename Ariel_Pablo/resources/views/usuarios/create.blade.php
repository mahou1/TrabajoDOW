@extends('layouts.master')
@section('contenido')

  <div class="row">
    <div class="col-md-6">
          {{Form::open(array('url'=>'/usuarios','method'=>'post'))}}
      <div class="card ">
        <div class="card-body">
            <div class="form-group">
              <label class=for="txtUser">User :</label>
              <input type="text" class="form-control {{($errors->has('user')?'is-invalid':'')}}" name="user" values="{{ old('user') }}">
              @if($errors->has('user'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('user') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <div class="form-group">
              <label for="txtPassword">Contraseña :</label>
              <input type="text" class="form-control {{$errors->has('password')?'is-invalid':''}}" name="password">
              @if($errors->has('password'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('password') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <div class="form-group">
              <labelfor="txtpassword_comfirmation">Repita contraseña :</label>
              <input type="text" class="form-control  {{$errors->has('password_confirmation')?'is-invalid':''}}" name="password_confirmation">
              @if($errors->has('password_confirmation'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('password_confirmation') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <div class="form-group">
              <label for="txtnombre-completo">Nombre :</label>
              <input type="text" class="form-control  {{$errors->has('nombre_completo')?'is-invalid':''}}" name="nombre_completo">
              @if($errors->has('nombre_completo'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('nombre_completo') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <div class="form-group">
              <label for="txtCorreo">Correo :</label>
              <input type="email" class="form-control   {{$errors->has('correo')?'is-invalid':''}}" name="correo">
              @if($errors->has('correo'))
                <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                  <ul>
                      @foreach($errors->get('correo') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
              @endif
            </div>
            <div class="form-group row d-flex">
              <label class="col-4"for="txtFecha-nac">Fecha de Nacimiento :</label>
              <div>
                  <input type="date" class=" {{$errors->has('fecha_nac')?'is-invalid':''}} form-control" name="fecha_nac">
                  @if($errors->has('fecha_nac'))
                    <div class=" col alert alert-danger p-0 mt-2 mb-0" rol="alert">
                      <ul>
                          @foreach($errors->get('fecha_nac') as $error)
                            <li >{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                  @endif
              </div>

            </div>
            <div class="form-group row d-flex">
              <label class="col-4"for="txtGenero">Genero : </label>
              <div>
                <select class="custom-select"  class="form-control {{$errors->has('genero')?'is-invalid':''}}" name="genero">
                  <option value="">Seleccione</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                  <option value="O">Otro</option>
                </select>
                @if($errors->has('genero'))
                  <div class=" col alert alert-danger p-0 mt-2 mb-0" rol="alert">
                    <ul>
                        @foreach($errors->get('genero') as $error)
                          <li >{{$error}}</li>
                        @endforeach
                    </ul>
                  </div>
                @endif
              </div>
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
@endsection
