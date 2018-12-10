@extends('layouts.master')
@section('contenido')



<div class="row">
  <div class="col">
    <div class="card">
      <div class="card-header">
        <div class="row">
          <div class="col">
            <h2>Ubicaciones</h2>

          </div>
          <div class="col">
            <a href="/ubicaciones/create" class="float-right btn btn-raised btn-primary btn-sm">Agregar</a>

          </div>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-bordered table-striped table-hover table-sm">
          <thead class="thead-dark">
            <tr>
              <th>N°</th>
              <th>Nombre</th>
              <th>Tour Asociados</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            @foreach ($ubicaciones as $index => $ubicacion)
            <tr>
                <td>{{$index+1}}</td>
                <td>{{$ubicacion->nombre}}</td>
                <td>
                  <ul >
                    @foreach ($ubicacion->tours as $tour)
                      <option value="{{$tour->id}}" ></option>
                      <li><a href="/tours/{{$tour->id}}">{{$tour->nombre}}</a></li>
                    @endforeach
                  </ul>
                </td>
                <td>
                    {{-- {{Form::open(array('url'=>'ubicaciones/'.$ubicacion->id,'method'=>'delete'))}} --}}
                    <a href="/ubicaciones/{{$ubicacion->id}}/edit" class="float-right btn btn-success btn-sm m-2">Editar</a>
                    <button type="button" name="button"  data-id="{{$ubicacion->id}}" data-nombre="{{$ubicacion->nombre}}"class="btn-borrar float-right btn btn-danger btn-sm m-2">Borrar</button>
                    {{-- {{Form::close()}} --}}
                </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

  <div class="row">
    <div class="col">

    </div>
  </div>

@endsection

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
        <p>Desea borrar la Ubicacion :<spam id="Ubicacion"></spam></p>
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
@endsection

@section('script')
<script>
 $('.btn-borrar').click(function(){
      var id = $(this).attr('data-id');
      var nombre = $(this).attr('data-nombre');
      $('#frm-borrar').attr('action','ubicaciones/'+id);
      $('#Ubicacion').html(nombre);
     $('#modal-confirmacion').modal('show');
 });

</script>
@endsection
