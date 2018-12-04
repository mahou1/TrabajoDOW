@extends('layouts.master')
@section('contenido')
  <div class="row">
    <div class="col-md-6">
          {{Form::open(array('url'=>'/usuarios','method'=>'post'))}}
      <div class="card ">
        <div class="card-body">

            <div class="form-group row p-0">
              <label class="col-3"for="txtUser">User :</label>
              <div>
                  <input type="text" class="form-control" name="user">
              </div>

            </div>
            <div class="form-group row">
              <label class="col-3"for="txtPassword">Contraseña :</label>
              <div>
                  <input type="text" class="form-control" name="password">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-3"for="txtpassword_comfirmation">Repita contraseña :</label>
              <div>
                  <input type="text" class="form-control" name="password_confirmation">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-3"for="txtnombre-completo">Nombre :</label>
              <div>
                  <input type="text" class="form-control" name="nombre_completo">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-3"for="txtCorreo">Correo :</label>
              <div>
                  <input type="email" class="form-control" name="correo">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-3"for="txtFecha-nac">Fecha de Nacimiento :</label>
              <div>
                  <input type="date" class="form-control" name="fecha_nac">
              </div>
            </div>
            <div class="form-group row">
              <label class="col-3"for="txtGenero">Genero : </label>
              <div>
                <select class="custom-select"  class="form-control" name="genero">
                  <option value="0">Seleccione</option>
                  <option value="M">Masculino</option>
                  <option value="F">Femenino</option>
                  <option value="O">Otro</option>
                </select>
              </div>

            </div>

        </div>
        <div class="card-footer d-flex justify-content-end">
          <button class="btn btn-dark mr-2" type="reset">Reiniciar</button>
          <button class="btn btn-primary" type=submit>Crear</button>
        </div>
      </div>
      {{Form::close()}}
    </div>
  </div>
@endsection
