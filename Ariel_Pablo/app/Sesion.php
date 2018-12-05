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

}
