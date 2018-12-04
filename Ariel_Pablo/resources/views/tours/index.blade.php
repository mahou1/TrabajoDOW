@extends('layouts.master')
@section('contenido')
  <div class="row mt-3">
    <div class="col">
      <h2>Tours Disponibles</h2>
    </div>
  </div>
  <div class="row">
    <div class="col">

        @foreach($tours as $tour)
          <div class="card-group mt-2 ">
            <div class="card col-3 m-0 p-0">
              <a href=""><img class="card-img-top" src="data:image/jpeg;base64,{{base64_encode($tour->imagen)}}" style="width:200px; height:200px;"alt="" ></a>
            </div>
              <div class="card col-9 m-0 p-0" >
                  <div class="card-body p-1">
                      <div>
                          <h4>{{$tour->nombre}}</h4>
                      </div>
                      <div  >
                        <p>{{substr(($tour->descripcion),0,200).' . . .'}}</p>
                      </div>
                  </div>
                  <div class="card-footer d-flex justify-content-end">
                      <a href="/tours/{{$tour->id}}" class="btn btn-sm btn-primary">Detalle</a>
                      <a href="/tours/{{$tour->id}}/edit" class="btn btn-sm btn-primary">Editar</a>
                  </div>
              </div>
          </div>
        @endforeach


    </div>
  </div>
@endsection
