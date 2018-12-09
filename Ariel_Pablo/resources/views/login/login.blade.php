@extends('layouts.master')
@section('contenido')
<div class="row" >
  <div class="col-md-6 mb-5 dark-text text-center text-md-left">
    <h2 class="display-4 mb-0 pt-md-5 pt-5 font-weight-bold ">Inicio de sesión</h2>
  </div>



  <div class="col-md-6">
    <div class="card">
      <div class="card-body">
        {{Form::open(array('url'=>'login'))}}
        <div class="md-form">
          {{-- <label for="user">Nombre de usuario</label> --}}
          <i class="fas fa-user prefix"></i>
          <input type="text" name="user" id="user" class="form-control">
          <label for="user" id="user">Nombre de usuario</label>
        </div>
        <div class="md-form">
          {{-- <label for="password">Contraseña</label> --}}
          <i class="fas fa-key prefix"></i>
          <input type="password" name="password" id="password"class="form-control">
          <label for="password" id="password">Contraseña</label>
        </div>
        <button type="submit" name="iniciar" class="btn btn-primary">Iniciar sesión</button>
        {{Form::close()}}
      </div>
    </div>
    @if($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{$error}}</li>
        @endforeach
      </ul>
    </div>
    @endif
  </div>
</div>
<hr/>
<div class="row">

</div>
@endsection
