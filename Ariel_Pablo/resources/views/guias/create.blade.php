@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h2>Agregar Guía</h2>
    </div>
  </div>
  </hr>
  <div class="row">
    <div class="col col-md-6">
      {{Form::open(array('url'=>'guias'))}}
      <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" name="nombre" class="form-control">
        @if($errors->has('nombre'))
          <div class="alert alert-danger alert-sm mx-2" role="alert">
              Indique nombre de guia
          </div>
        @endif
      </div>
      <div class="form-group">
        <label for="telefono">Telefono</label>
        <input type="text" name="telefono" class="form-control">
      </div>
      <div class="form-group">
        <label for="correo">Correo</label>
        <input type="email" name="correo" class="form-control">
      </div>
      <div class="form-group">
        <label for="descripcion">Descripcion</label>
        <textarea name="descripcion" rows="8" cols="80" class="form-control"></textarea>
      </div>
      <div class="form-group">
        <a href="/guias" class="btn btn-dark">Volver</a>
        <button type="submit" name="button" class="btn btn-primary">Agregar</button>
      </div>
      {{Form::close()}}
    </div>
    @if($errors->any())
      <div class="col col-md-6">
        <div class="alert alert-danger">
          <ul>
          @foreach($errors->all() as $error)
            <li>{{$error}}</li>

          @endforeach
          </ul>
        </div>
      </div>
    @endif
  </div>
@endsection
