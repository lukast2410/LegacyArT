<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('from-google', function($user){
            return substr($user->profile_image, 0, 4) === "http";
        });

        Gate::define('can-create', function($user){
            return $user && $user->role->name === "creator";
        });

        Gate::define('admin', function($user){
            return $user->role->name === "admin";
        });
    }
}
