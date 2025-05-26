<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use NjoguAmos\Paystack\Facades\Transaction;
use NjoguAmos\Paystack\Data\Transactions\InitializeRequestData;

Route::view('/', 'welcome');

Route::payment('/transactions/transactions/initialize-transaction',function (){


    $data = new InitializeRequestData(
        amount: 10000,
        email: 'customer@example.com'
    );

    $transaction = Transaction::initialize(data: $data);

    $authorizationUrl = $response->authorization_url;
});
