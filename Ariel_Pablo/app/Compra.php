<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compra extends Model
{
  public $timestamps = false;
  protected $table ='comprassesiones';
  protected $fillable = ['fecha','tours_id','disponibilidad'];

}
