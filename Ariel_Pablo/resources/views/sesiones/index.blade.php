@extends('layouts.master')
@section('contenido')
  <div class="row ">
    <div class="col">
      <h2>Sesiones</h2>
    </div>
  </div>
  <hr>
  <div class="row ">
    <div class="col">
      <div class="form-group">
        <a href="/sesiones/create" class="btn btn-raised btn-primary">Agregar</a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-md-8 offset-md-2">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>N°</th>
            <th>Tour</th>
            <th>Fecha</th>
            <th>Disponibilidad</th>
            <th>Guias</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($sesiones as $index => $sesion)
            <tr>
              <td>{{$index +1}}</td>
              <td>{{$sesion->tour->nombre}}</td>
              <td>{{$sesion->fecha}}</td>
              <td>{{$sesion->disponibilidad}}</td>
              <td>
                <ul>
                  @foreach ($sesion->guias as $guia)
                    <li>{{  $guia->nombre}}</li>
                  @endforeach
                </ul>
              </td>
              <td>
                <a href="/sesiones/{{$sesion->id}}/edit" class="btn btn-success btn-sm">Edit</a>
              </td>
            </tr>
          @endforeach

        </tbody>
      </table>
    </div>
  </div>

@endsection
