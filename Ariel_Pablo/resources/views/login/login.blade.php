@extends('layouts.master')
@section('contenido')
<div class="row  align-items-center" >
  <div class="col  col-md-6">
    <h2>Inicio de sesión</h2>
  </div>
  <div class="col col-md-6">
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
