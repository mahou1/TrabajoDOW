@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h2>Guía</h2>
    </div>
  </div>
<hr/>
  <div class="row">
    <div class="col">
      <div class="card">
        <div class="card-header">
          <h2>{{$guia->nombre}}</h2>
        </div>
        <div class="card-body">
          <p><b>Telefono : </b>{{$guia->telefono}} </p>
          <p><b>Correo   : </b>{{$guia->correo}} </p>
          <p><b>Descripción : </b>{{$guia->descripcion}} </p>
        </div>
      </div>
      <div class="form-group mt-2">
        <a href="/guias" class="btn btn-raised btn-secondary">Volver</a>
      </div>
    </div>
  </div>

@endsection
