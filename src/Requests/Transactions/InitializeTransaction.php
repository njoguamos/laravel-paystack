<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Requests\Transactions;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use Saloon\Contracts\Body\HasBody;
use Saloon\Traits\Body\HasJsonBody;
use NjoguAmos\Paystack\Data\Transactions\TransactionInitRequestData;
use NjoguAmos\Paystack\Data\Transactions\TransactionInitResponseData;

class InitializeTransaction extends Request implements HasBody
{
    use HasJsonBody;

    protected Method $method = Method::POST;

    public function __construct(public TransactionInitRequestData $data)
    {
    }

    /**
     * Resolves and returns the API endpoint for initializing a transaction.
     *
     * @return string
     */
    public function resolveEndpoint(): string
    {
        return '/transaction/initialize';
    }

    /**
     *
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): mixed
    {
        $data = $response->json()['data'];

        return new TransactionInitResponseData(
            authorization_url: $data['authorization_url'],
            access_code: $data['access_code'],
            reference: $data['reference'],
        );
    }

    /**
     * Returns the default body for the request.
     *
     * @return array<string, mixed>
     */
    protected function defaultBody(): array
    {
        return $this->data->filled();
    }
}
