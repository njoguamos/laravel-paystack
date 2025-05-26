<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Endpoints;

use NjoguAmos\Paystack\PaystackConnector;
use NjoguAmos\Paystack\Requests\Transactions\InitializeTransaction;
use NjoguAmos\Paystack\Data\Transactions\TransactionInitRequestData;
use NjoguAmos\Paystack\Data\Transactions\TransactionInitResponseData;

class Transaction
{
    protected PaystackConnector $connector;

    public function __construct()
    {
        $this->connector = app(abstract: PaystackConnector::class);
    }

    /**
     * Initialize a transaction from your backend
     *
     * @throws \Saloon\Exceptions\SaloonException
     */
    public function Initialize(TransactionInitRequestData $data): TransactionInitResponseData
    {
        $response = $this->connector->send(
            request: new InitializeTransaction(data: $data)
        );

        return $response->dtoOrFail();
    }
}
