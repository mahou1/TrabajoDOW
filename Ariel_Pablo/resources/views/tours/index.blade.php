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
                    {{Form::open(array('url'=>'tours/'.$tour->id,'method'=>'delete'))}}
                    <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                    {{Form::close()}}
                  @endcan
                </div>
              </div>
            </div>
          </div>
        @endforeach
  </div>
@endsection
