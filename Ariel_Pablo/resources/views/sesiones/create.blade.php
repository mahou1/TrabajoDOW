@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h2>Agregar Sesión</h2>
    </div>
  </div>
  <hr/>
  <div class="row mt-3">
    <div class="col ">
      <div class="card">
        <div class="card-body">
          {{Form::open(array('url'=>'sesiones'))}}
            <div class="form-group">
              <label for="idTour">Tours</label>
              <select class="form-control" name="idTour" id="idTour">
                <option value="" selected >Seleccione</option>
                @foreach($tours as $tour)
                  <option value="{{$tour->id}}">{{$tour->nombre}}</option>
                @endforeach
              </select>
              @if($errors->has('idTour'))
                <div class="col p-0 m-0 ">
                  <div class="alert alert-danger p-0 mt-2 mb-0" role="alert">
                    <ul>
                        @foreach($errors->get('idTour') as $error)
                          <li >{{$error}}</li>
                        @endforeach
                    </ul>
                  </div>
                </div>
              @endif
            </div>
            <div class="form-group">
              <label for="fecha">Fecha</label>
              <input type="date" class=" {{$errors->has('fecha_nac')?'is-invalid':''}} form-control" name="fecha" value="{{old('fecha')}}">
              @if($errors->has('fecha'))
                <div class="col p-0 m-0 ">
                  <div class="alert alert-danger p-0 mt-2 mb-0" role="alert">
                    <ul>
                        @foreach($errors->get('fecha') as $error)
                          <li >{{$error}}</li>
                        @endforeach
                    </ul>
                  </div>
                </div>
              @endif
            </div>
            <label class="col" >Guias :</label>
            <div class="form-group">
              <div class="col col-md-6 p-0 ">
                  <table id="tbl-guia" class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">id</th>
                      <th scope="col">nombre</th>
                      <th scope="col"></th>
                    </tr>
                  </thead>
                  <tbody id="tb-guias">
                  </tbody>
                </table>
              </div>
              <div class="col col-md-6">
                <div class="input-group">
                  <select class="custom-select" id="guias" aria-label="Example select with button addon">
                    <option selected>Selecione Guia</option>
                    @foreach ($guias  as $guia)
                      <option value="{{$guia->id}}">{{$guia->nombre}}</option>
                    @endforeach
                  </select>
                  <div class="input-group-append">
                    <button id="btn-guia" class="btn btn-outline-secondary btn-sm" type="button">Agregar</button>
                  </div>
                </div>
              </div>
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
    $('#btn-guia').click(function(){
        var nombre = $('#guias :selected').text();
        if(nombre!="Selecione Guia"){
          var id = $('#guias :selected').val();
          $('#guias :selected').prop( "disabled", true );
          var nombre = $('#guias :selected').text();
          $('#guias option:eq(0)').prop('selected', true);
            $('#tb-guias').append('<tr><th>'+id+'</th><td>'+nombre+'</td><td><button data-id="'+id+'"id="btn-eliminar" class="btn btn-secondary btn-sm" type="button">eliminar</button></td><td><input type="hidden" name="guias[]" value="'+id+'"/></td></tr>');

        }
      });
      $('#tbl-guia').on('click','#btn-eliminar',function(){
        var id=$(this).attr('data-id');
        $('#guias option[value="'+id+'"]').prop('disabled', false);
        $(this).closest('tr').remove();

      });

  </script>
@endsection
