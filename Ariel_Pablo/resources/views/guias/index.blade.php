@extends('layouts.master')
@section('contenido')
  <div class="row ">
    <div class="col">
      <h2>Guías</h2>
    </div>
  </div>
  <hr>
  <div class="row ">
    <div class="col d-flex justify-content-center">
      <div class="form-group">
        <a href="/guias/create" class="btn btn-raised btn-primary">Agregar</a>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col">
      <table class="table table-bordered table-striped table-hover">
        <thead class="thead-dark">
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
                  <button type="submit" id="btn-borrar" data-id-guia="{{$guia->id}}" data-nombre-guia="{{$guia->nombre}}"name="button" class="btn btn-raised btn-danger btn-sm m-2">Borrar</button>
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
{{--
@section('modal')
  <div class="modal" id="modal-confirmacion" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Confirmacion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Desea borrar al guia :<spam id="guia"></spam></p>
      </div>
      <div class="modal-footer">
        <form action=""  method="POST" id="frm-borrar">
          <input type="hidden" name="_method" value="DELETE" />
          @csrf
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <button type="submit" class="btn btn-danger">Borrar</button>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection --}}
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

  {{-- <script>
   $('#btn-borrar').click(function(){
        var id = $(this).attr('data-id-guia');
        var nombre = $(this).attr('data-nombre-guia');
        $('#frm-borrar').attr('action','guias/'+id);
        $('#guia').html(nombre);
       $('#modal-confirmacion').modal('show');
   });

  </script> --}}
@endsection
