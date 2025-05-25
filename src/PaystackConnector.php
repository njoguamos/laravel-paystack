<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack;

use Saloon\Http\Connector;
use Saloon\Http\Auth\TokenAuthenticator;

class PaystackConnector extends Connector
{
    /**
     * Create a new Paystack connector instance.
     *
     * @param string $baseUrl
     * @param string $secretKey
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
     * Provides the default authentication mechanism.
     *
     * @return TokenAuthenticator
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
