@extends('layouts.master')
@section('contenido')
<div class="row">
  <div class="col">
    <h2>Inicio de sesión</h2>
  </div>
</div>
<hr/>
<div class="row">
  <div class="col col-md-4 offset-md-8">
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
  </div>
</div>
@endsection
