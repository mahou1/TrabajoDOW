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
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($ubicaciones as $index => $ub)
          <tr>
              <th>{{$index+1}}</th>
              <td>{{$ub->nombre}}</td>
              <td>
                {{Form::open(array('url'=>'ubicaciones/'.$ub->id,'method'=>'delete'))}}
                <a href="/ubicaciones/{{$ub->id}}" class="btn btn-raised btn-secondary">Detalles</a>
                <button type="submit" name="button" class="btn btn-raised btn-danger btn-sm">Borrar</button>
                <a href="/ubicaciones/{{$ub->id}}/edit" class="btn btn-raised btn-success btn-sm">Editar</a>
                {{Form::close()}}
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>

@endsection
