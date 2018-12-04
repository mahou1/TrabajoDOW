<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{
    protected $table='ubicacion';
    protected  $fillable = ['nombre'];

    public function tours(){
      return $this->hasMany('App\Tour','idUbicacion');
    }
}
