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
        <div class="form-group">
          <label for="user">Nombre de usuario</label>
          <input type="tex" name="user" class="form-control">
        </div>
        <div class="form-group">
          <label for="password">Contraseña</label>
          <input type="password" name="password" class="form-control">
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
