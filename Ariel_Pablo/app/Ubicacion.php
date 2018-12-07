<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ubicacion extends Model
{


    protected $table='ubicaciones';
    protected  $fillable = ['nombre'];
    public $timestamps = false;
    use SoftDeletes;
    protected $dates = ['deleted_at'];

    public function tours(){
      return $this->hasMany('App\Tour','idUbicacion');
    }
}
