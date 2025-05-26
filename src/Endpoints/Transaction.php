<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Endpoints;

use NjoguAmos\Paystack\PaystackConnector;
use NjoguAmos\Paystack\Data\Transactions\InitializeRequestData;
use NjoguAmos\Paystack\Requests\Transactions\VerifyTransaction;
use NjoguAmos\Paystack\Data\Transactions\InitializeResponseData;
use NjoguAmos\Paystack\Data\Transactions\TransactionResponseData;
use NjoguAmos\Paystack\Requests\Transactions\InitializeTransaction;

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
    public function Initialize(InitializeRequestData $data): InitializeResponseData
    {
        $response = $this->connector->send(
            request: new InitializeTransaction(data: $data)
        );

        return $response->dtoOrFail();
    }

    /**
     * Confirm the status of a transaction.
     *
     * @throws \Saloon\Exceptions\SaloonException
     */
    public function verify(int|string $reference): TransactionResponseData
    {
        $response = $this->connector->send(
            request: new VerifyTransaction(reference: $reference)
        );

        return $response->dtoOrFail();
    }
}
