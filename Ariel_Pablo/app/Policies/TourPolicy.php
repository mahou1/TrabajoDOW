<?php

namespace App\Policies;

use App\Usuario;
use App\Tour;
use Illuminate\Auth\Access\HandlesAuthorization;

class TourPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view the tour.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function view(Usuario $user, Tour $tour)
    {
        //
    }

    /**
     * Determine whether the user can create tours.
     *
     * @param  \App\Usuario  $user
     * @return mixed
     */
    public function create(Usuario $user)
    {
        return $user->tipo === 'Administrador';
    }

    public function permiso(Usuario $user)
    {
      return $user->tipo === 'Administrador';
    }

    /**
     * Determine whether the user can update the tour.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function update(Usuario $user, Tour $tour)
    {
        //
    }

    /**
     * Determine whether the user can delete the tour.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function delete(Usuario $user, Tour $tour)
    {
        //
    }

    /**
     * Determine whether the user can restore the tour.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function restore(Usuario $user, Tour $tour)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the tour.
     *
     * @param  \App\Usuario  $user
     * @param  \App\Tour  $tour
     * @return mixed
     */
    public function forceDelete(Usuario $user, Tour $tour)
    {
        //
    }
}
