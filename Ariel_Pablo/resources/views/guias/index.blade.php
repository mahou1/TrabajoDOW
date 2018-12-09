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
        <a href="/guias/create" class="btn btn-raised btn-primary">Agregar</a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col col-md-8 offset-md-2">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>N°</th>
            <th>Nombre</th>
            <th>Telefono</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($guias as $index => $guia)
          <tr>
              <td>{{$index+1}}</td>
              <td>{{$guia->nombre}}</td>
              <td>{{$guia->telefono}}</td>
              <td>
                <div class="btn-group btn-group-sm" role="group" >
                  {{Form::open(array('url'=>'guias/'.$guia->id,'method'=>'delete'))}}
                  <a href="/guias/{{$guia->id}}" class="btn btn-raised btn-secondary btn-sm m-2">Detalles</a>
                  <button type="submit" name="button" class="btn btn-raised btn-danger btn-sm m-2">Borrar</button>
                  <a href="/guias/{{$guia->id}}/edit" class="btn btn-raised btn-success btn-sm m-2">Editar</a>
                  {{Form::close()}}
                </div>
              </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
@endsection


{{--  Borrar --}}
@section('script')
  <script>
    $('.btn-editar').click(function(e){
      var form = $(this).parents('form');
      var url = form.attr('action');

      $.get(url, form.serialize(), function(e){
        $('#alert').html('e.nombre');
      });
    });
  </script>
@endsection
