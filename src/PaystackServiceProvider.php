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
            __DIR__ . '/../config/paystack.php' => config_path(path: 'paystack.php'),
        ], groups: 'paystack');

        // Merge configuration
        $this->mergeConfigFrom(
            path: __DIR__ . '/../config/paystack.php',
            key: 'paystack'
        );
    }

    /**
     * Register the application services.
     */
    public function register(): void
    {
        $this->app->bind(
            abstract: PaystackConnector::class,
            concrete: function (): PaystackConnector {
                return new PaystackConnector(
                    baseUrl: config()->string(key: 'paystack.base_url'),
                    secretKey: config()->string(key: 'paystack.secret_key')
                );
            }
        );
    }
}
