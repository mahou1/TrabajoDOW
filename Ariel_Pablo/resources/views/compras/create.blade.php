@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h4>Reserva de Tour : {{$tour->nombre}}</h4>
    </div>
  </div>
  <div class="row">
    <div class="col">
      {{Form::open(array('url'=>'/compras','method'=>'post'))}}
      <input type="hidden" id="id-sesion" name="idSesion">
      <div class="card">
        <div class="card-body">
          <div class="form-group">
            <label for="txt-fecha">Fecha Reserva : </label>
            <select id="slt-fecha" class="custom-select"name="fecha" id="">
              <option value="" selected >Selecione</option>
              @foreach ($sesiones as $key => $sesion)
                  <option data-idSesion="{{$sesion->id}}" data-disp="{{$sesion->disponibilidad}}" value="{{$sesion->fecha}}">{{$sesion->fecha}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
              <label for="txt-disponibilidad" id="disponibilidad">Disponibilidad : </label>
                <div class="form-inline">
              <label for="txt-cant-participantes">Cantidad de Participantes  :</label>
              <select id="slt-part"class="ml-md-3 col-md-auto custom-select form-control">
                <option value="">Selecione fecha</option>
              </select>
            </div>
          </div>
          <hr/>
          <div class="form-group">
              <label  class="col ml-0 pl-0" for="txt.precio-uni">Precio por persona : $ {{number_format($tour->precio,'0',',','.')}}</label>
              <label id="lbl-total"for="txt-total"> Precio Total : $ <spam id="spm-total">0</spam></label>
              <input id="monto" type="hidden" name="monto" >
          </div>
        </div>
        <div class="card-footer d-flex justify-content-end">
          <a href="{{ url()->previous() }}" class="btn btn-secondary mr-2">Volver</a>
          <button type="submit" class="btn btn-primary">Reservar</button>
        </div>
      </div>
      {{Form::close()}}
    </div>
  </div>
@endsection
@section('script')
<script>
  $('#slt-fecha').change(function(){
    var disp =  $('option:selected', this).attr('data-disp');
    $('#disponibilidad').html('Disponibilidad : '+disp);
 var idSesion =$('option:selected', this).attr('data-idSesion');
    $('#id-sesion').attr('value',idSesion);
    var html = "<option  selected>0</option>";
    for( i=1 ; i<=disp ;i++){
      html +="<option value=\""+i+"\">"+i+"</option>";
    };
    $('#slt-part').html( html );
  });
  $('#slt-part').change(function(){
    var part= $('option:selected',this).attr('value');
    var precio = {{$tour->precio}};
    var total = part * precio;
      $('#monto').attr('value',total);
    total =new Intl.NumberFormat("de-DE").format(total);
      $('#spm-total').html(total);
  });
</script>
@endsection
