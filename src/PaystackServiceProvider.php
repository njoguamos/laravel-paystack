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
        $this->publishes([
            __DIR__.'/../config/paystack.php' => config_path('paystack.php'),
        ], 'paystack-config');

        // Merge configuration
        $this->mergeConfigFrom(
            __DIR__.'/../config/paystack.php',
            'paystack'
        );
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        // Register the main class to use with the facade
        $this->app->singleton('paystack', function (): \NjoguAmos\Paystack\Paystack {
            return new Paystack();
        });
    }
}
