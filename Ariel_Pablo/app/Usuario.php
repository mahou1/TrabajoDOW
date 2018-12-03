<?php

namespace App;


use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
class Usuario extends Authenticatable
{
      use Notifiable;
      protected $table ='usuarios';
      protected $fillable = [
          'user', 'nombre_completo', 'password','correo','tipo'
      ];
}
