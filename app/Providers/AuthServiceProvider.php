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
            return $user->authroles_id == 5;
        });

        $this->registerPolicies();

        Gate::define('edit_foodItems', function($user) {
            return $user->authroles_id == 5;
        });

        $this->registerPolicies();

        Gate::define('delete_foodItems', function($user) {
            return $user->authroles_id == 5;
        });

        $this->registerPolicies();

        Gate::define('like_foodItems', function($user) {
            return $user->authroles_id == 6;
        });

        $this->registerPolicies();

        Gate::define('deletecomment_foodItems', function($user) {
            return $user->authroles_id == 5;
        });

        $this->registerPolicies();

        Gate::define('deletereply_foodItems', function($user) {
            return $user->authroles_id == 5;
        });


    }
}
