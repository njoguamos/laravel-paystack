<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Tests;

use Orchestra\Testbench\TestCase as Orchestra;
use NjoguAmos\Paystack\PaystackServiceProvider;

class TestCase extends Orchestra
{
    /**
     * Get package providers.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return array<int, class-string>
     */
    protected function getPackageProviders($app)
    {
        return [
            PaystackServiceProvider::class,
        ];
    }

    /**
     * Define environment setup.
     *
     * @param  \Illuminate\Foundation\Application  $app
     * @return void
     */
    protected function defineEnvironment($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testing');
        $app['config']->set('database.connections.testing', [
            'driver'   => 'sqlite',
            'database' => ':memory:',
            'prefix'   => '',
        ]);

        // Set Paystack test configuration
        $app['config']->set('paystack.public_key', 'test_public_key');
        $app['config']->set('paystack.secret_key', 'test_secret_key');
    }
}
