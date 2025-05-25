<?php

declare(strict_types=1);

use Saloon\Http\Auth\TokenAuthenticator;
use NjoguAmos\Paystack\PaystackConnector;

beforeEach(closure: function () {
    $this->baseUrl = 'https://api.paystack.co';
    $this->secretKey = 'pk_test_7d3c95e72a18b4f56082139d74c6b30fa92e8f7c'; // A fake key 😊

    $this->connector = new PaystackConnector(
        baseUrl: $this->baseUrl,
        secretKey: $this->secretKey
    );
});

it(description: 'resolves the correct base url', closure: function () {
    expect(value: $this->connector->resolveBaseUrl())
        ->toBe(expected: $this->baseUrl);
});

it(description: 'set the secret key in the authorization header', closure: function () {
    $authenticator = $this->connector->getAuthenticator();

    expect(value: $authenticator)
        ->toBeInstanceOf(class: TokenAuthenticator::class)
        ->and(value: $authenticator)
        ->token->toBe(expected: $this->secretKey)
        ->prefix->toBe(expected: 'Bearer');
});

it(description: 'sets the correct default headers', closure: function () {
    expect(value: $this->connector->headers()->all())
        ->toBeArray()
        ->toHaveKey(key: 'Content-Type', value: 'application/json')
        ->toHaveKey(key: 'Accept', value: 'application/json');
});
