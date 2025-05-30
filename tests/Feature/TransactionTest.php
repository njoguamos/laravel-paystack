<?php

declare(strict_types=1);

use Saloon\Exceptions\Request\RequestException;
use Saloon\Http\Faking\MockClient;
use Saloon\Http\Faking\MockResponse;
use NjoguAmos\Paystack\Facades\Transaction;
use NjoguAmos\Paystack\Requests\Transactions\InitializeTransaction;
use NjoguAmos\Paystack\Data\Transactions\InitializeRequestData;
use NjoguAmos\Paystack\Data\Transactions\InitializeResponseData;

describe('Initialize Transaction', function (){

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

        $data = new InitializeRequestData(amount: 1000, email: 'customer@example.com');
        $response = Transaction::initialize(data: $data);

        expect(value: $response)
            ->toBeInstanceOf(class: InitializeResponseData::class)
            ->authorization_url->toBe(expected: $body['data']['authorization_url'])
            ->access_code->toBe(expected: $body['data']['access_code'])
            ->reference->toBe(expected: $body['data']['reference']);

    });

    test(description: 'throw an exception when status is false', closure: function () {
        $body = [
            'status'  => false,
            'message' => 'Duplicate charge request for reference',
        ];

        /** @noinspection PhpParamsInspection */
        MockClient::global(mockData: [InitializeTransaction::class => MockResponse::make(body: $body) ]);

        $data = new InitializeRequestData(amount: 1000, email: 'customer@example.com', reference: 'duplicate-reference');
        Transaction::initialize(data: $data);

    })->throws(RequestException::class);

});
