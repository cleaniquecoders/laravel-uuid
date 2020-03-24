<?php

namespace CleaniqueCoders\LaravelUuid\Tests\Stubs\Providers;

use CleaniqueCoders\LaravelUuid\Observers\UuidObserver;
use CleaniqueCoders\LaravelUuid\Tests\Stubs\Models\User;
use Illuminate\Support\ServiceProvider;

class UnitTestServiceProvider extends ServiceProvider
{
    /**
     * Register the application services.
     */
    public function register()
    {
    }

    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        User::observe(UuidObserver::class);
    }
}
