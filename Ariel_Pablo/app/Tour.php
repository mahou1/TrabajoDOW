<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Tour extends Model
{
    use SoftDeletes;
    public $timestamps = false;
    protected $dates = ['deleted_at'];
    protected $table ='tours';
    protected $fillable = ['idUbicacion','nombre','descripcion','precio','duracion','max_personas','imagen'];

    public function guias(){
      return $this->belongsToMany('App\Guia','tour_guia');
    }
    public function ubicacion(){
      return $this->belongsTo('App\Ubicacion','idUbicacion');
    }
}
