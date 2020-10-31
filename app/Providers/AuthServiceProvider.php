<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('create_foodItems', function($user) {
            return $user->role_id == 1; // for admin
        });

        $this->registerPolicies();

        Gate::define('like_foodItems', function($user) {
            return $user->role_id == 2; // for users
        });

        $this->registerPolicies();

        Gate::define('delete_foodItems', function($user) {
            return $user->role_id == 1; // for admin
        });

        $this->registerPolicies();

        Gate::define('edit_foodItems', function($user) {
            return $user->role_id == 1; // for admin
        });

        $this->registerPolicies();

        Gate::define('toggle_foodItems', function($user) {
            return $user->role_id == 1; // for admin
        });

    }
}
