<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guia extends Model
{
    protected $fillable = ['nombre','telefono','descripcion','correo'];

    public function tour(){
      return $this->belongsToMany('App\Tour','tour_guia');
    }
}
