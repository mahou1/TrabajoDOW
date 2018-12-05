<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  public $timestamps = false;
  protected $table ='usuarios_sesiones';
  protected $fillable = ['idUsuario','idSesion','fecha','cant_participantes','monto'];

  public function usuario(){
    return $this->belongsTo('App\Usuario','idUsuario');
  }

  public function sesion(){
    return $this->belongsTo('App\Sesion','idSesion');
  }

}
