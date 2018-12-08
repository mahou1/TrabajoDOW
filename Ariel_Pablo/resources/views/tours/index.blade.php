@extends('layouts.master')
@section('contenido')
  <div class="row ">
    <div class="col">
      <h2>Tours Disponibles</h2>
    </div>

    @can('create',App\Tour::class)
    <div class="col">
      <a href="/tours/create" class="btn btn-secondary">Agregar Tour</a>
    </div>
    @endcan
  </div>
  <div class="row">
        @foreach($tours as $tour)
          <div class="col-md-6 p-4 ">
            <div class="card card-cascade wider narrower">

              <!-- Card image -->
              <div class="view view-cascade overlay ">
                <img  class="card-img-top wider" src="data:image/jpeg;base64,{{base64_encode($tour->imagen)}}" style="width:530px; height:320px;">
              </div>

              <!-- Card content -->
              <div class="card-body card-body-cascade text-center">
                <!-- Title -->
                <h4 class="card-title"><strong>{{$tour->nombre}}</strong></h4>
                <p class="card-text">{{substr(($tour->descripcion),0,200).' . . .'}}</p>

                <!-- Linkedin -->
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
