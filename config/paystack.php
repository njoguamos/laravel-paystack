<?php

declare(strict_types=1);

return [
    /*
    |--------------------------------------------------------------------------
    | Paystack Keys
    |--------------------------------------------------------------------------
    |
    | The Paystack API keys give you access to the Paystack API.
    | You can get your API keys from the Paystack Dashboard.
    |
    */

    'public_key' => env(key: 'PAYSTACK_PUBLIC_KEY'),
    'secret_key' => env(key: 'PAYSTACK_SECRET_KEY'),

    /*
    |--------------------------------------------------------------------------
    | Paystack Base URL
    |--------------------------------------------------------------------------
    |
    | This is the base URL for making API requests to the Paystack API.
    |
    */

    'base_url' => env(key: 'PAYSTACK_URL', default: 'https://api.paystack.co'),

    /*
    |--------------------------------------------------------------------------
    | Paystack Webhook URL
    |--------------------------------------------------------------------------
    |
    | This URL will be used by Paystack to send webhook notifications
    | about events that happen on your account.
    |
    */

    'webhook_url' => env(key: 'PAYSTACK_WEBHOOK_URL', default: '/paystack/webhook'),
];
