@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
        <h3>Agrgear Tour</h3>
    </div>
  </div>

  <div class="row">
    <div class="col">
      {{Form::open(array('url'=>'/tours','files'=>'true'))}}
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label for="txt-nombre">Nombre: </label>
            <input type="txt-nombre" name="nombre" class="form-control">
          </div>
          <div class="form-group">
            <label for="txt-descripcion">Descripcion : </label>
            <textarea class="form-control" name="descripcion" rows="8" cols="80" style="resize:none"></textarea>
          </div>
          <div class="form-group row d-flex  ">
            <label class="col-2" for="txt-ubicacion">Ubicacion : </label>
            <div class="col-4">
              <select class="form-control" name="idUbicacion" id="">
                <option value="">Selecione</option>
                @foreach ($ubicaciones as  $ubicacion)
                  <option value="{{$ubicacion->id}}">{{$ubicacion->nombre}}</option>
                @endforeach
              </select>
            </div>
          </div>
          <div class="form-group row d-flex">
            <label  class="col-2" for="txt-precio">Precio :</label>
            <div class="col-4">
                <input type="text" class="form-control"  name="precio">
            </div>
          </div>
          <div class="form-group row d-flex">
            <label class="col-2" for="txt-duracion">Duracion :</label>
            <div class="col-4">
                <input type="text" class="form-control" name="duracion">
            </div>

          </div>
          <div class="form-group row d-flex">
            <label  class="col-2" for="txt-max-presoans">Maximo de participantes : </label>
            <div class="col-4">
                <input type="text" class="form-control" name="max_personas">
            </div>
          </div>
          <div class="form-group row d-flex">
            <label class="col-2"for="txt-imagen">Imagen : </label>
            <div class="col-4">
              <input type="file" class="form-control" id="imagen" name="imagen">
            </div>
          </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
            <a href="/tours" class="btn btn-dark volver mr-2">Volver</a>
            <button type="submit" class="btn btn-primary">Agregar</button>
        </div>
      </div>
      {{Form::close()}}
    </div>
  </div>
@endsection
