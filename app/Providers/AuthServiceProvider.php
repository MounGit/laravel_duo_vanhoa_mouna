<?php

namespace App\Providers;

use App\Models\Contact;
use App\Models\Feature;
use App\Models\Portfolio;
use App\Models\SectionTitresDescription;
use App\Models\User;
use App\Policies\ContactPolicy;
use App\Policies\FeaturesPolicy;
use App\Policies\PortfolioPolicy;
use App\Policies\SectionPolicy;
use App\Policies\UserPolicy;
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
        Portfolio::class => PortfolioPolicy::class,
        Contact::class => ContactPolicy::class,
        SectionTitresDescription::class => SectionPolicy::class,
        User::class => UserPolicy::class,
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();

    }
}
