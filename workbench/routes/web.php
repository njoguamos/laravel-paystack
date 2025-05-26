<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');

Route::get('/transactions/initialize-transaction', function () {
    $data = new \NjoguAmos\Paystack\Data\Transactions\InitializeRequestData(
        amount: 100,
        email: fake()->email(),
        currency: \NjoguAmos\Paystack\Enums\Currency::KES,
        reference: now()->timestamp,
        callback_url: '/'
    );

    $response = \NjoguAmos\Paystack\Facades\Transaction::initialize(data: $data);

    $authorizationUrl = $response->authorization_url;

    return redirect()->away($authorizationUrl);
});


Route::get('/transactions/verify/{reference}', function (int|string $reference) {
    $response = \NjoguAmos\Paystack\Facades\Transaction::verify(reference: $reference);

    return $response;
});
