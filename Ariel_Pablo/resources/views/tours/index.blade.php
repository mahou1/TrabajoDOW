@extends('layouts.master')
@section('contenido')
  <div class="row ">
    <div class="col ">
      <h2>Tours</h2>
    </div>

    @auth
    @if(auth()->user()->tipo==='Administrador')
    <div class="col">
      <a href="/tours/create" class="btn btn-secondary">Agregar Tour</a>
    </div>
    @endif
    @endauth
  </div>
  <hr/>
  <div class="row">
        @foreach($tours as $tour)
          <div class="col-md-6 p-4 ">
            <div class="card ">
              <!-- Card image -->
              <div class="view">
                <img  class="card-img-top wider" src="data:image/jpeg;base64,{{base64_encode($tour->imagen)}}" style="width:530px; height:320px;">
              </div>
              <!-- Card content -->
              <div class="card-body text-center">
                <!-- Title -->
                <h4 class="card-title"><strong>{{$tour->nombre}}</strong></h4>
                <p class="card-text">{{substr(($tour->descripcion),0,200).' . . .'}}</p>
                <!-- Button  -->
                <div class="form-inline justify-content-center">
                  <a href="/tours/{{$tour->id}}" class="btn btn-sm btn-primary mr-2">Detalle</a>
                  @can('permiso',App\Tour::class)
                    <a href="/tours/{{$tour->id}}/edit" class="btn btn-sm btn-secondary mr-2">Editar</a>
                    {{-- {{Form::open(array('url'=>'tours/'.$tour->id,'method'=>'delete'))}} --}}
                    <button type="submit" data-id="{{$tour->id}}" data-nombre="{{$tour->nombre}}" id="" class="btn-borrar btn btn-sm btn-danger">Eliminar</button>
                    {{-- {{Form::close()}} --}}
                  @endcan
                </div>
              </div>
            </div>
          </div>
        @endforeach
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
        <p>Desea borrar el Tour :<spam id="tour"></spam></p>
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
      $('#frm-borrar').attr('action','tours/'+id);
      $('#tour').html(nombre);
     $('#modal-confirmacion').modal('show');
 });

</script>
@endsection
