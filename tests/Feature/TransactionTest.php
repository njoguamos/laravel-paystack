<?php

declare(strict_types=1);

use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use NjoguAmos\Paystack\Endpoints\Transaction;
use NjoguAmos\Paystack\Requests\Transactions\InitializeTransaction;
use NjoguAmos\Paystack\Data\Transactions\TransactionInitRequestData;
use NjoguAmos\Paystack\Data\Transactions\TransactionInitResponseData;

test(description: 'can initialise a transaction', closure: function () {
    $body = [
        'status'  => true,
        'message' => 'Authorization URL created',
        'data'    => [
            'authorization_url' => 'https://checkout.paystack.com/3ni8kdavz62431k',
            'access_code'       => '3ni8kdavz62431k',
            'reference'         => 're4lyvq3s3'
        ]
    ];

    /** @noinspection PhpParamsInspection */
    MockClient::global(mockData: [InitializeTransaction::class => MockResponse::make(body: $body) ]);

    $data = new TransactionInitRequestData(amount: 1000, email: 'customer@example.com');
    $transaction = new Transaction();
    $response = $transaction->initialize(data: $data);

    expect(value: $response)
        ->toBeInstanceOf(class: TransactionInitResponseData::class)
        ->authorization_url->toBe(expected: $body['data']['authorization_url'])
        ->access_code->toBe(expected: $body['data']['access_code'])
        ->reference->toBe(expected: $body['data']['reference']);
    ;

});
