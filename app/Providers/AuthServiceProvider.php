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

        Gate::define('view-revenue', function($user){
            return $user->role->name === "admin";
        });

        Gate::define('can-request', function($user, $profile){
            return $user && $user->id == $profile->id && $user->role->name === "user";
        });

        Gate::define('verify', function($user) {
            return $user->email_verified_at == null;
        });

        Gate::define('profile-owner', function($user, $profile){
            return $user && $user->id == $profile->id;
        });

        Gate::define('cancel-bid', function($user, $bid){
            return $user && $user->id == $bid->user->id && $bid->status == 'ongoing';
        });

        Gate::define('modify-request', function($user){
            return $user && $user->role->name === "admin";
        });
    }
}
