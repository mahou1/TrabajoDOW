@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h2>Editar : / {{date('d-m-Y', strtotime($sesion->fecha))}} {{$sesion->disponibilidad}}</h2>
      <span id="titulo_fecha"></span>

    </div>
  </div>
  <hr/>
  <div class="row mt-3">
    <div class="col col-md-6">
      <div class="card">
        <div class="card-body">
          {{Form::open(array('url'=>'sesiones/'.$sesion->id,'method'=>'PATCH'))}}
            <div class="form-group">
              <label for="idTour">Tours</label>
              <select class="form-control" name="idTour">
                @foreach($tours as $tour)
                  <option @if($sesion->idTour==$tour->id) selected @endif value="{{$tour->id}}">{{$tour->nombre}}</option>
                @endforeach
              </select>






            </div>
            <div class="form-group">
              <label for="fecha">Fecha</label>
              <input type="date" class=" {{$errors->has('fecha_nac')?'is-invalid':''}} form-control" name="fecha" value="{{$sesion->fecha}}">
              @if($errors->has('fecha_nac'))
                <div class="col">
                  <div class="alert alert-danger p-0 mt-2 mb-0" role="alert">
                    <ul>
                        @foreach($errors->get('fecha_nac') as $error)
                          <li >{{$error}}</li>
                        @endforeach
                    </ul>
                  </div>
                </div>
              @endif
            </div>

            <div class="form-group">
              <a href="/sesiones" class="btn btn-dark">Volver</a>
              <button type="submit" name="button" class="btn btn-primary">Agregar</button>
            </div>
          {{Form::close()}}
        </div>
      </div>
    </div>

  </div>
@endsection

@section('script')
  <script>
  var fecha = {{$sesion->fecha}};
  $('#titulo_fecha').html(fecha);
  </script>
@endsection
