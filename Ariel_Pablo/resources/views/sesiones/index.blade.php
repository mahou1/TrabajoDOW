@extends('layouts.master')
@section('contenido')

  <div class="row ">
    <div class="col">
      <h2>Sesiones</h2>
    </div>
  </div>
  <hr>
  <div class="row ">
    <div class="col d-flex justify-content-center">
      <div class="form-group">
        <a href="/sesiones/create" class="btn btn-raised btn-primary">Agregar</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col ">
        <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr class="thead-dark">
            <th>N°</th>
            <th>Tour</th>
            <th>Fecha</th>
            <th class="w-10">Disponibilidad</th>
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
              <td class="p-0">
                <ul class="pl-1" style="list-style: none;">
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
