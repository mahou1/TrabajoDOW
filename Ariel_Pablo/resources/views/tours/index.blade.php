@extends('layouts.master')
@section('contenido')
  <div class="row mt-3">
    <div class="col">
      <h2>Tours Disponibles</h2>
    </div>
    <div class="col">
      <a href="/tours/create" class="btn btn-secondary">Agregar Tour</a>
    </div>
  </div>
  <div class="row">
    <div class="col">
        @foreach($tours as $tour)
          <div class="card-group mt-2 ">
            <div class="card col-md-3 m-0 p-0">
              <a href=""><img class="card-img-top" src="data:image/jpeg;base64,{{base64_encode($tour->imagen)}}" style="width:200px; height:200px;"alt="" ></a>
            </div>
              <div class="card col-md-9 m-0 p-0" >
                  <div class="card-body p-1">
                      <div>
                          <h4>{{$tour->nombre}}</h4>
                      </div>
                      <div  >
                        <p>{{substr(($tour->descripcion),0,200).' . . .'}}</p>
                      </div>
                  </div>
                  <div class="card-footer d-flex justify-content-end">
                      <a href="/tours/{{$tour->id}}" class="btn btn-sm btn-primary mr-2">Detalle</a>
                      <a href="/tours/{{$tour->id}}/edit" class="btn btn-sm btn-secondary mr-2">Editar</a>
                      {{Form::open(array('url'=>'tours/'.$tour->id,'method'=>'delete'))}}
                        <button type="submit" class="btn btn-sm btn-danger">Eliminar</button>
                      {{Form::close()}}
                  </div>
              </div>
          </div>
        @endforeach


    </div>
  </div>
@endsection
