<?php

namespace App;
use App\Tour;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
      public $timestamps = false;
      protected $table ='sesiones';
      protected $fillable = ['idTour','fecha','disponibilidad'];

      public function tour(){
        return $this->belongsTo('App\Tour','idTour');
      }

    
      public function guias(){
        return $this->belongsToMany('App\Guia','sesiones_guias','idSesiones','idGuia');
      }
}
