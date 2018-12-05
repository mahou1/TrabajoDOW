<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ubicacion extends Model
{

    protected $table='ubicaciones';
    protected  $fillable = ['nombre'];

    protected $table='ubicaciones';
    protected  $fillable = ['nombre'];
    public $timestamps = false;
    public function tours(){
      return $this->hasMany('App\Tour','idUbicacion');
    }
}
