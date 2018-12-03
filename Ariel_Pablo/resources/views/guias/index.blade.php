@extends('layouts.master')
@section('contenido')
  <div class="row ">
    <div class="col">
      <h2>Guías</h2>
    </div>
  </div>

  <div class="row ">
    <div class="col">
      <div class="form-group">
        <a href="/guias/create" class="btn btn-primary">Agregar</a>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col">
      <table>
        <thead>
          <tr>
            <th>Nombre</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          <tr>

          </tr>
        </tbody>
      </table>
    </div>
  </div>
@endsection
