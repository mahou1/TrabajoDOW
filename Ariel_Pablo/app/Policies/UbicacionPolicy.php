<?php

namespace App\Policies;

use App\Usuario;
use App\Ubicacion;
use Illuminate\Auth\Access\HandlesAuthorization;

class UbicacionPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the ubicacion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Ubicacion  $ubicacion
     * @return mixed
     */

     public function permiso(Usuario $user)
     {
       return $user->tipo === 'Administrador';
     }
     
    public function view(Usuario $user, Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Determine whether the user can create ubicacions.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function create(Usuario $user)
    {
        //
    }

    /**
     * Determine whether the user can update the ubicacion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Ubicacion  $ubicacion
     * @return mixed
     */
    public function update(Usuario $user, Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Determine whether the user can delete the ubicacion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Ubicacion  $ubicacion
     * @return mixed
     */
    public function delete(Usuario $user, Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Determine whether the user can restore the ubicacion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Ubicacion  $ubicacion
     * @return mixed
     */
    public function restore(Usuario $user, Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the ubicacion.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Ubicacion  $ubicacion
     * @return mixed
     */
    public function forceDelete(Usuario $user, Ubicacion $ubicacion)
    {
        //
    }
}
