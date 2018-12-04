@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
        <h3>Editar Tour</h3>
    </div>
  </div>

  <div class="row">
    <div class="col">
      {{Form::open(array('url'=>'/tours','method'=>'patch','files'=>'true'))}}
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label class="titulo-form" for="txt-nombre">Nombre: </label>
            <input type="txt-nombre" name="nombre" class="form-control " value="{{$tour->nombre}}">
          </div>
          <div class="form-group">
            <label class="titulo-form" for="txt-descripcion">Descripcion : </label>
            <textarea class="form-control" name="descripcion" rows="8" cols="80" style="resize:none">{{$tour->descripcion}}</textarea>
          </div>
          <div class="form-group row d-flex  ">
            <label class="col-2 titulo-form" for="txt-ubicacion">Ubicacion : </label>
            <div class="col-4">
              <select class="form-control" name="idUbicacion" id="">
                <option value="">Selecione</option>
                @foreach ($ubicaciones as  $ubicacion)
                  <option value="{{$ubicacion->id}}" {{$ubicacion->id === $tour->idUbicacion ? 'selected' :''}}>{{$ubicacion->nombre}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row d-flex">
            <label  class="col-2 titulo-form" for="txt-precio">Precio :</label>
            <div class="col-4">
                <input type="text" class="form-control"  name="precio" value="{{$tour->precio}}">
            </div>
          </div>
          <div class="form-group row d-flex">
            <label class="col-2 titulo-form" for="txt-duracion">Duracion :</label>
            <div class="col-4">
                <input type="text" class="form-control" name="duracion" value="{{$tour->duracion}}">
            </div>

          </div>
          <div class="form-group row d-flex">
            <label  class="col-2 titulo-form" for="txt-max-presoans">Maximo de participantes: </label>
            <div class="col-4">
                <input type="text" class="form-control" name="max_personas" value="{{$tour->max_personas}}">
            </div>
          </div>
          <div class="form-group row d-flex">
            <label class="col-2 titulo-form" for="txt-imagen">Imagen : </label>
            <div class="col-4">
              <input type="file" class="form-contorl" id="imagen" name="imagen" value="data:image/jpeg;base64,{{base64_encode($tour->imagen)}}">
            </div>
          </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="/tours" class="btn btn-dark volver mr-2">Volver</a>
            <button type="reset" class="btn btn-secondary">Reiniciar</button>
            <button type="submit" class="btn btn-primary">Editar</button>
        </div>
      </div>
      {{Form::close()}}
    </div>
  </div>
@endsection
