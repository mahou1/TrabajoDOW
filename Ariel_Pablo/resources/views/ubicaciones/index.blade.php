@extends('layouts.master')
@section('contenido')
  <div class="row ">
    <div class="col">
      <h2>Ubicaciones</h2>
    </div>
  </div>
  <hr>
  <div class="row ">
    <div class="col">
      <div class="form-group">
        <a href="/ubicaciones/create" class="btn btn-raised btn-primary">Agregar</a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-8 offset-md-2">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>id</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ubicaciones as $index => $ubicacion)
          <tr>
              <td>{{$index+1}}</td>
              <td>{{$ubicacion->nombre}}</td>
              <td>{{$ubicacion->id}}</td>
              <td>
                <a href="/ubicaciones/{{$ubicacion->id}}/edit" class="btn btn-success">Editar</a>
                <a href="/ubicaciones/{{$ubicacion->id}}/editar" class="btn btn-success">Editar Edit</a>
                <a href="/ubicaciones/{{$ubicacion->id}}" class="btn btn-primary">Show</a>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
