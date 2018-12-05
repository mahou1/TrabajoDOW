<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Usuario extends Authenticatable
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
