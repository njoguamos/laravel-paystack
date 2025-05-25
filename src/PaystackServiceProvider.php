<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack;

use Illuminate\Support\ServiceProvider;

class PaystackServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot(): void
    {
        // Publish configuration
        $this->publishes(paths: [
            __DIR__.'/../config/paystack.php' => config_path(path: 'paystack.php'),
        ], groups: 'paystack');

        // Merge configuration
        $this->mergeConfigFrom(
            path: __DIR__.'/../config/paystack.php',
            key: 'paystack'
        );
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Register the main class to use with the facade
        $this->app->singleton(abstract: 'paystack', concrete: function (): \NjoguAmos\Paystack\Paystack {
            return new Paystack();
        });
    }
}
