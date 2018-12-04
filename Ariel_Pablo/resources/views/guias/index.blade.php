@extends('layouts.master')
@section('contenido')
  <div class="row ">
    <div class="col">
      <h2>Guías</h2>
    </div>
  </div>
  <hr>
  <div class="row ">
    <div class="col">
      <div class="form-group">
        <a href="/guias/create" class="btn btn-primary">Agregar</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <table class="table table-hover table-bordered">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th>Correo</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            @foreach ($guias as $guia)
              <td>{{$guia->nombre}}</td>
              <td>{{$guia->telefono}}</td>
              <td>{{$guia->correo}}</td>
              <td>
                {{Form::open(array('url'=>'guias/'.$guia->id,'method'=>'delete'))}}
                <button type="submit" name="button" class="btn btn-danger">Borrar</button>
                <a href="/guias/{{$guia->id}}/edit" class="btn btn-success">Editar</a>
                {{Form::close()}}

              </td>
            @endforeach
          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
