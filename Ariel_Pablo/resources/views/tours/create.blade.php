@extends('layouts.master')
@section('contenido')
   {{-- @if ($errors->any())
     {{dd($errors)}}
   @endif --}}
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
            <label class="titulo-form" for="txt-nombre">Nombre: </label>
            <input type="txt-nombre" name="nombre" class="form-control {{$errors->has('nombre')?'is-invalid':''}}" value="{{old('nombre')}}">
            @if ($errors->has('nombre'))
              <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                <ul>
                    @foreach($errors->get('nombre') as $error)
                      <li >{{$error}}</li>
                    @endforeach
                </ul>
              </div>
            @endif
          </div>
          <div class="form-group">
            <label class="titulo-form" for="txt-descripcion">Descripcion : </label>
            <textarea class="form-control {{$errors->has('descripcion')?'is-invalid':''}}" name="descripcion" rows="8" cols="80" style="resize:none">{{old('descripcion')}}</textarea>
            @if ($errors->has('descripcion'))
              <div class=" alert alert-danger p-0 mt-2 mb-0" rol="alert">
                <ul>
                    @foreach($errors->get('descripcion') as $error)
                      <li>{{$error}}</li>
                    @endforeach
                </ul>
              </div>
            @endif
          </div>
          <div class="form-group row d-flex">
            <label class="col-md-2 titulo-form" for="txt-ubicacion">Ubicacion : </label>
            <div class="col-md-4">
              <select class="custom-select form-control {{$errors->has('idUbicacion')?'is-invalid':''}}" name="idUbicacion" id="" >
                <option value="" selected>Seleccione</option>
                @foreach ($ubicaciones as  $ubicacion)
                  <option value="{{$ubicacion->id}}">{{$ubicacion->nombre}}</option>
                @endforeach
              </select>
            </div>
            @if ($errors->has('idUbicacion'))
              <div class="col col-md-4 ">
                <div class=" alert alert-danger p-0 mt-2 mt-md-0 mb-0" role="alert">
                  <ul>
                      @foreach($errors->get('idUbicacion') as $error)
                        <li >{{$error}}</li>
                      @endforeach
                  </ul>
                </div>
                </div>
              @endif
              </div>
              <div class="form-group row d-flex">
                <label  class="col-md-2 titulo-form" for="txt-precio">Precio :</label>
                <div class="col-md-4">
                    <input type="text" class="form-control {{$errors->has('precio')?'is-invalid':''}}"  name="precio" value="{{old('precio')}}">
                </div>
                @if ($errors->has('precio'))
                  <div class="col col-md-4 ">
                    <div class="alert alert-danger p-0 mt-2 mt-md-0 mb-0" role="alert">
                      <ul>
                          @foreach($errors->get('precio') as $error)
                            <li >{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                  </div>
                @endif
              </div>
              <div class="form-group row d-flex">
                <label class="col-md-2 titulo-form" for="txt-duracion">Duracion :</label>
                <div class="col-md-4">
                    <input type="text" class="form-control {{$errors->has('duracion')?'is-invalid':''}}" name="duracion" value="{{old('duracion')}}">
                </div>
                @if ($errors->has('duracion'))
                  <div class="col col-md-4 " >
                    <div class=" alert alert-danger p-0 mt-2 mt-md-0 mb-0" role="alert">
                      <ul>
                          @foreach($errors->get('duracion') as $error)
                            <li >{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                  </div>
                @endif
              </div>
              <div class="form-group row d-flex">
                <label  class="col-md-2 titulo-form" for="txt-max-presoans">Maximo de participantes : </label>
                <div class="col-md-4">
                    <input type="text" class="form-control {{$errors->has('max_personas')?'is-invalid':''}}" name="max_personas" value="{{old('max_personas')}}">
                </div>
                @if ($errors->has('max_personas'))
                  <div class="col col-md-4 " >
                    <div class=" alert alert-danger p-0 mt-2 mt-md-0 mb-0" role="alert">
                      <ul>
                          @foreach($errors->get('max_personas') as $error)
                            <li >{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                  </div>
                @endif
              </div>
              <div class="form-group row d-flex">
                <label class="col-md-2 titulo-form"for="txt-imagen">Imagen : </label>
                <div class="col-md-4">
                  <div class="custom-file">
                    <input type="file" class=" form-control {{$errors->has('imagen')?'is-invalid':''}}" id="imagen" name="imagen"  lang="es" value="{{old('image')}}">
                  </div>

                </div>
                @if ($errors->has('imagen'))
                  <div class="col col-md-4">
                    <div class=" alert alert-danger p-0 mt-2 mt-md-0 mb-0" role="alert">
                      <ul>
                          @foreach($errors->get('imagen') as $error)
                            <li >{{$error}}</li>
                          @endforeach
                      </ul>
                    </div>
                  </div>
                @endif
              </div>
          </div>
          <div class="card-footer d-flex justify-content-end">
              <a href="/tours" class="btn btn-dark volver mr-2">Volver</a>
              <button type="submit" class="btn btn-primary">Agregar</button>
          </div>
        </div>
      </div>
      {{Form::close()}}
    </div>
  </div>
@endsection
