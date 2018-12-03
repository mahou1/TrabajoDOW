<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    protected $table ='tours';
    protected $fillable = ['nombre','descripcion','precio','duracion','max_personas'];

    public function guias(){
      return $this->belongsToMany('App\Guia','tour_guia');
    }
    public function ubicacion(){
      return $this->belongsTo('App\Ubicacion','idUbicacion');
    }
}
