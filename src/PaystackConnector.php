<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack;

use Saloon\Http\Response;
use Saloon\Http\Connector;
use Saloon\Http\Auth\TokenAuthenticator;
use Saloon\Traits\Plugins\AlwaysThrowOnErrors;

class PaystackConnector extends Connector
{
    use AlwaysThrowOnErrors;

    /**
     * Create a new Paystack connector instance.
     *
     *
     * @return void
     */
    public function __construct(
        protected string $baseUrl,
        protected string $secretKey
    ) {
    }

    /**
     * Resolves and returns the base URL for the application.
     *
     * @return string The base URL.
     */
    public function resolveBaseUrl(): string
    {
        return $this->baseUrl;
    }

    /**
     * Determines if the request has failed based on the response body.
     */
    public function hasRequestFailed(Response $response): ?bool
    {
        return str_contains($response->body(), '"status":false');
    }

    /**
     * Provides the default authentication mechanism.
     */
    protected function defaultAuth(): TokenAuthenticator
    {
        return new TokenAuthenticator($this->secretKey);
    }

    /**
     * Provides the default headers to be sent with each request.
     *
     * @return array<string, string>
     */
    protected function defaultHeaders(): array
    {
        return [
            'Content-Type' => 'application/json',
            'Accept'       => 'application/json',
        ];
    }
}
