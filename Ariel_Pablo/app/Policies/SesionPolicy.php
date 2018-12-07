<?php

namespace App\Policies;

use App\Usuario;
use App\Sesion;
use Illuminate\Auth\Access\HandlesAuthorization;

class SesionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the sesion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Sesion  $sesion
     * @return mixed
     */
     
     public function permiso(Usuario $user)
     {
       return $user->tipo === 'Administrador';
     }
    public function view(Usuario $user, Sesion $sesion)
    {
        //
    }

    /**
     * Determine whether the user can create sesions.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function create(Usuario $user)
    {
        //
    }

    /**
     * Determine whether the user can update the sesion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Sesion  $sesion
     * @return mixed
     */
    public function update(Usuario $user, Sesion $sesion)
    {
        //
    }

    /**
     * Determine whether the user can delete the sesion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Sesion  $sesion
     * @return mixed
     */
    public function delete(Usuario $user, Sesion $sesion)
    {
        //
    }

    /**
     * Determine whether the user can restore the sesion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Sesion  $sesion
     * @return mixed
     */
    public function restore(Usuario $user, Sesion $sesion)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the sesion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Sesion  $sesion
     * @return mixed
     */
    public function forceDelete(Usuario $user, Sesion $sesion)
    {
        //
    }
}
