@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h2>Editar Guía : {{$guia->nombre}}</h2>
    </div>
  </div>
  <hr/>
  <div class="row mt-3">
    <div class="col col-md-6">
      <div class="card">
        <div class="card-body">
          {{Form::open(array('url'=>'guias/'.$guia->id,'method'=>'PATCH'))}}
          <div class="form-group">
            <label for="nombre" class="titulo-form mb-5" >Nombre</label>
            <input type="text" name="nombre" class="form-control " value="{{$guia->nombre}}">
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
            <label for="telefono" class="titulo-form">Telefono</label>
            <input type="text" name="telefono" class="form-control " value="{{$guia->telefono}}">
            @if($errors->has('telefono'))
              <div class="alert alert-danger mt-1" role="alert">
                  <ul>
                  @foreach ($errors->get('telefono') as $error)
                    <li>{{$error}}</li>
                  @endforeach
                  </ul>
              </div>
            @endif
          </div>
          <div class="form-group">
            <label for="correo" class="titulo-form">Correo</label>
            <input type="email" name="correo" class="form-control " value="{{$guia->correo}}">
            @if($errors->has('correo'))
              <div class="alert alert-danger mt-1" role="alert">
                  <ul>
                  @foreach ($errors->get('correo') as $error)
                    <li>{{$error}}</li>
                  @endforeach
                  </ul>
              </div>
            @endif
          </div>
          <div class="form-group">
            <label for="descripcion" class="titulo-form">Descripcion</label>
            <textarea name="descripcion" rows="8" cols="80" class="form-control">{{$guia->descripcion}}</textarea>
            @if($errors->has('descripcion'))
              <div class="alert alert-danger mt-1" role="alert">
                  <ul>
                  @foreach ($errors->get('descripcion') as $error)
                    <li>{{$error}}</li>
                  @endforeach
                  </ul>
              </div>
            @endif
          </div>
          <div class="form-group">
            <a href="/guias" class="btn btn-dark">Volver</a>
            <button type="submit" name="button" class="btn btn-primary">Agregar</button>
          </div>
          {{Form::close()}}
        </div>
      </div>
    </div>

  </div>
@endsection
