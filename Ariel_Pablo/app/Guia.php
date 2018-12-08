<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guia extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre','telefono','descripcion','correo'];
    public $timestamps = false;

    public function sesiones(){
      return $this->belongsToMany('App\Tour','sesiones_guias','idGuia','idSesion');
    }
}
