<?php

namespace App\Policies;

use App\Usuario;
use App\Guia;
use Illuminate\Auth\Access\HandlesAuthorization;

class GuiaPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the guia.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Guia  $guia
     * @return mixed
     */
    public function permiso(Usuario $user)
    {
      return $user->tipo === 'Administrador';
    }
    
    public function view(Usuario $user, Guia $guia)
    {
        //
    }

    /**
     * Determine whether the user can create guias.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function create(Usuario $user)
    {
        //
    }

    /**
     * Determine whether the user can update the guia.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Guia  $guia
     * @return mixed
     */
    public function update(Usuario $user, Guia $guia)
    {
        //
    }

    /**
     * Determine whether the user can delete the guia.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Guia  $guia
     * @return mixed
     */
    public function delete(Usuario $user, Guia $guia)
    {
        //
    }

    /**
     * Determine whether the user can restore the guia.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Guia  $guia
     * @return mixed
     */
    public function restore(Usuario $user, Guia $guia)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the guia.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Guia  $guia
     * @return mixed
     */
    public function forceDelete(Usuario $user, Guia $guia)
    {
        //
    }
}
