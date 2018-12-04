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
    <div class="col-md-6">
      <table class="table table-bordered table-striped table-hover">
        <thead>
          <tr>
            <th>Nombre</th>
            <th>Telefono</th>
            <th></th>
          </tr>
        </thead>
        <tbody>
          @foreach ($guias as $guia)
          <tr>
              <td>{{$guia->nombre}}</td>
              <td>{{$guia->telefono}}</td>
              <td>

              
                <button type="button" class="btn btn-raised btn-secondary" data-toggle="snackbar"
                data-content="
                <h2>{{$guia->nombre}}</h2>
                <p>Telefono : {{$guia->telefono}}</p>
                <p>Descripcion : {{$guia->descripcion}}</p>
                "
                data-html-allowed="true" data-timeout="0">
                    Detalles
                </button>
                {{Form::open(array('url'=>'guias/'.$guia->id,'method'=>'delete'))}}
                <button type="submit" name="button" class="btn btn-raised btn-danger btn-sm">Borrar</button>
                <a href="/guias/{{$guia->id}}/edit" class="btn btn-raised btn-success btn-sm">Editar</a>
                {{Form::close()}}
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
