@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h2>Editar : {{$ubicacion->nombre}}</h2>
    </div>
  </div>
  <hr/>
  <div class="row mt-3">
    <div class="col col-md-6">
      <div class="card">
        <div class="card-body">
          {{Form::open(array('url'=>'ubicaciones/'.$ubicacion->id,'method'=>'PATCH'))}}
          <div class="form-group">
            <label for="nombre" class="titulo-form " >Nombre</label>
            <input type="text" name="nombre" class="form-control " value="{{$ubicacion->nombre}}" >
            @if($errors->has('nombre'))
              <div class="alert alert-danger mt-1" role="alert">
                  <ul>
                  @foreach ($errors->get('nombre') as $error)
                    <li>{{$error}}</li>
                  @endforeach
                  </ul>
              </div>
            @endif
          </div>
          <div class="form-group">
            <a href="/ubicaciones" class="btn btn-dark">Volver</a>
            <button type="submit" name="button" class="btn btn-primary">Editar</button>
          </div>
          {{Form::close()}}
        </div>
      </div>
    </div>

  </div>
@endsection
