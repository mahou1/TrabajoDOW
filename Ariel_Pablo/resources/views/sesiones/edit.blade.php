@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h2>Editar : {{$sesion->tour->nombre}} / {{date('d-m-Y', strtotime($sesion->fecha))}}</h2>
    </div>
  </div>
  <hr/>
  <div class="row mt-3">
    <div class="col">
      <div class="card">
        <div class="card-body">
          {{Form::open(array('url'=>'sesiones/'.$sesion->id,'method'=>'patch'))}}
            <div class="form-group">
              <input type="hidden" name="idSesion" value="{{$sesion->id}}">
              <label for="idTour">Tours</label>
              <select class="form-control" name="idTour">
                @foreach($tours as $tour)
                  <option @if($sesion->idTour==$tour->id) selected @endif value="{{$tour->id}}">{{$tour->nombre}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="fecha">Fecha</label>
              <input type="hidden" name="disponibilidad" value="{{$sesion->disponibilidad}}">
              <input type="date" class="{{$errors->has('fecha_nac')?'is-invalid':''}} form-control" name="fecha" value="{{$sesion->fecha}}">
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
            <label class="col-12" >Guias :</label>
            <div class="form-group ">
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
                    @foreach ($sesion->guias as $guia)
                      <tr>
                        <th>{{$guia->id}}</th>
                        <td>{{$guia->nombre}}</td>
                        <td><button data-id=">{{$guia->id}}" id="btn-eliminar" class="btn btn-outline-secondary btn-sm" type="button">eliminar</button></td>
                        <td><input type="hidden" name="guias[]" value="{{$guia->id}}"/></td>
                      </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>

              <div class="col col-md-6">
                <div class="input-group">
                  <select class="custom-select" id="guias" aria-label="Example select with button addon">
                    <option selected>Selecione Guia</option>
                    @foreach ($guias as $guia)
                        <option value="{{$guia->id}}">{{$guia->nombre}} </option>
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
              <button type="submit" name="button" class="btn btn-primary ">Editar</button>
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
            $('#tb-guias').append('<tr><th>'+id+'</th><td>'+nombre+'</td><td><button data-id="'+id+'"id="btn-eliminar" class="btn btn-outline-secondary btn-sm" type="button">eliminar</button</td><td><input type="hidden" name="guias[]" value="'+id+'"/></td></tr>');

        }
      });
      $('#tbl-guia').on('click','#btn-eliminar',function(){
        var id=$(this).attr('data-id');
        $('#guias option[value="'+id+'"]').prop('disabled', false);
        $(this).closest('tr').remove();

      });
      // $(document).ready(function(){
      //   @foreach ($sesion->guias as $key => $guia)
      //     $('#guias option:eq({{$guia->id}})').prop("disabled", true );
      //   @endforeach
      // });
  </script>
@endsection
