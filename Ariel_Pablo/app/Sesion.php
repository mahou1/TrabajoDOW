<?php

namespace App;
use App\Tour;
use Illuminate\Database\Eloquent\Model;

class Sesion extends Model
{
      public $timestamps = false;
      protected $table ='sesiones';
      protected $fillable = ['fecha','tours_id','disponibilidad'];

      public function tour(){
        return $this->belongsTo('Tour','tours_id');
      }

}
