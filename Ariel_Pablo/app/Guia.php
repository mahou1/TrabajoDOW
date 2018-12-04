<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Guia extends Model
{
    use SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $fillable = ['nombre','telefono','descripcion','correo'];
    public $timestamps = false;

    public function tour(){
      return $this->belongsToMany('App\Tour','tour_guia');
    }
}
