<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticable;
class Usuario extends Authenticable
{
      use Notifiable;
      public $timestamps = false;
      protected $table ='usuarios';
      protected $fillable = [
          'user', 'password', 'nombre_completo','correo','fecha_nac','genero','tipo'
      ];

      public function compras(){
        return $this->hasMany('App\Compra','idUsuario');
      }
}
