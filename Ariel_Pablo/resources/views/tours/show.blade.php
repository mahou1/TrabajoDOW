@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col">
      <h2>{{$tour->nombre}}</h2>
      <p>{{$tour->descripcion}}</p>
      <p></p>
      <p>$ {{number_format($tour->precio,'0',',','.')}}</p>
      <p>{{$tour->duracion}}</p>
    </div>
  </div>
@endsection
