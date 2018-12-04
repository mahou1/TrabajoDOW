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
              <a href=""><img class="card-img-top" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAARMAAAC3CAMAAAAGjUrGAAAAA1BMVEUAAACnej3aAAAAR0lEQVR4nO3BAQ0AAADCoPdPbQ8HFAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAPBgxUwAAU+n3sIAAAAASUVORK5CYII=" alt="" ></a>
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
                  </div>
              </div>
          </div>
        @endforeach


    </div>
  </div>
@endsection
