@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col-md-6">
      {{-- <img class="rounded img-fluid img-thumbnail" style="width:600px; height:600px;" > --}}
      <img class="  rounded img-fluid img-thumbnail" style="width:100%; height:auto;" src="data:image/jpeg;base64,{{base64_encode($tour->imagen)}}" title="{{$tour->nombre}}"/>
    </div>
    <div  class="card col-md-6 m-0 p-0">


      <div class="card-body">
        <h2 class="card-title">{{$tour->nombre}}</h2>

      <hr>
        <p>{{$tour->descripcion}}</p>
        <div class="row ml-1">
            <label for="">Ubicacion : </label>
            <p>@if($tour->ubicacion)
              {{$tour->ubicacion->nombre}}
            @else
                Sin ubicacion
            @endif</p>
        </div>
        <div class="row ml-1">
          <label for="" class="col-3">Precio</label>
          <p> $ {{number_format($tour->precio,'0',',','.')}}</p>
        </div>
        <div class="row ml-1">
          <label for="" class="col-3">Duracion</label>
            <p>{{$tour->duracion}}</p>
        </div>
        <div class="row ml-1">

            @if(!$tour->sesiones->isEmpty())
              <div class="alert alert-success">
              Sesiones Disponibles !
              </div>
            @else
              <div class="alert alert-danger">
              Sesiones No disponibles :(
              </div>
            @endif

        </div>

      </div>

      <div class="card-footer d-flex justify-content-end">
        <a href="/tours" class="btn btn-dark mr-2">Volver</a>
        <a href="/compras/create/{{$tour->id}}" class="btn btn-primary {{($tour->sesiones->isEmpty())?'disabled':''}}">Comprar</a>
      </div>
    </div>
  </div>
@endsection
