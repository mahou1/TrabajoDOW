<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $fillable = ['nombre','descripcion','precio','duracion','max_personas'];

    public function guias(){
      return $this->belongsToMany('App\Guia','tour_guia');
    }
    public function ubicacion(){
      return $this->belongsToMany('App\Ubicacion','idUbicacion');
    }
}
