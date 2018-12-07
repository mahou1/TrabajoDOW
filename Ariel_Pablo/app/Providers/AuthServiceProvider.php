<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Tour' => 'App\Policies\TourPolicy',
        'App\Guia' => 'App\Policies\GuiaPolicy',
        'App\Ubicacion' => 'App\Policies\UbicacionPolicy',
        'App\Sesion' => 'App\Policies\SesionPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        //
    }
}
