<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tour extends Model
{
    public $timestamps = false;
    protected $table ='tours';
    protected $fillable = ['idUbicacion','nombre','descripcion','precio','duracion','max_personas','imagen'];

    public function guias(){
      return $this->belongsToMany('App\Guia','tour_guia');
    }
    public function ubicacion(){
      return $this->belongsTo('App\Ubicacion','idUbicacion');
    }
}
