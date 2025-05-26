<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Requests\Transactions;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use NjoguAmos\Paystack\Data\Transactions\TransactionResponseData;

class VerifyTransaction extends Request
{
    protected Method $method = Method::GET;

    public function __construct(public int|string $reference)
    {
    }

    /**
     * Resolves and returns the API endpoint for initializing a transaction.
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return "/transaction/verify/{$this->reference}";
    }

    /**
     *
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): TransactionResponseData
    {
        $data = $response->json()['data'];

        return new TransactionResponseData(
            id: $data['id'],
            domain: $data['domain'],
        );
    }
}
