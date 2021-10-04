<?php

namespace App\Providers;

use App\Models\Feature;
use App\Models\User;
use App\Policies\FeaturesPolicy;
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
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
        Header::class => HeaderPolicy::class,
        Feature::class => FeaturesPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

        Gate::define('admin',function($user){
            return ($user->role_id==1);

        });
        Gate::define('adminweb',function($user){
            return ($user->role_id==1||$user->role_id==2);

        });
    }
}
