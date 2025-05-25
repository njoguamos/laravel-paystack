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

    'public_key' => env('PAYSTACK_PUBLIC_KEY', ''),
    'secret_key' => env('PAYSTACK_SECRET_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | Paystack Base URL
    |--------------------------------------------------------------------------
    |
    | This is the base URL for making API requests to the Paystack API.
    |
    */

    'url' => env('PAYSTACK_URL', 'https://api.paystack.co'),

    /*
    |--------------------------------------------------------------------------
    | Paystack Webhook URL
    |--------------------------------------------------------------------------
    |
    | This URL will be used by Paystack to send webhook notifications
    | about events that happen on your account.
    |
    */

    'webhook_url' => env('PAYSTACK_WEBHOOK_URL', '/paystack/webhook'),
];
