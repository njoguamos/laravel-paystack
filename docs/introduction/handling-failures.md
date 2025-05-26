# Handling API Errors

This package comes with a powerful error handling capabilities:

## Types of Errors

### 5xx Errors

These errors occur when your request could not be fulfilled due to an error on Paystack's end. An `\Saloon\Exceptions\Request\RequestException` exception is thrown whenever there is an error. These errors are:

> [!IMPORTANT]
> `5xx` errors are uncommon and you should report them to the Paystack team

### 4xx Errors

There include:

- `400 Error` - A validation or client side error occurred and the request was not fulfilled. 
- `401 Error` - The request was not authorized. This can be triggered by passing an invalid secret key in the authorization header or the lack of one. 
- `404 Error` - Request could not be fulfilled as the request resource does not exist.

### False Status Errors

Whenever Paystack return a response with `status: false` in the response body, an exception is thrown. 

```json
{
  "status": false,
  "message": "Transaction reference is invalid",
  "data": []
}
```

Even though this is a successful 200 response, the body tell us otherwise. Therefore we treat this response as a failure and throw an exception.

## Handling failures

When there is an errors, this package will throw a `\Saloon\Exceptions\Request\RequestException` exception. You are free to handle this exception in your application anyway you want. [Laravel documentation](https://laravel.com/docs/12.x/errors) has some great guideline on way in which you can handle, report or ignore errors.

In the following example, we use the old try-and-catch. 

```php
use NjoguAmos\Paystack\Facades\Transaction;
use NjoguAmos\Paystack\Data\Transactions\InitializeRequestData;
use Saloon\Exceptions\Request\RequestException;

try {
    $data = new InitializeRequestData(
        amount: 1000, 
        email: 'customer@example.com', 
        reference: 'duplicate-reference'
        );
        
    $response = Transaction::initialize(data: $data);
} catch (RequestException $exception){
    // Handle $exception
    $code = $exception->getCode()
}

// Handle successful response
```

In this case, the developer passed a duplicate `reference code`, something that Paystack prohibits. Therefore, an exception is thrown. The developer can decide to handle the exception by creating another transaction or verifying the status of the duplicate transaction.

### Available Exception Methods

`Saloon\Exceptions\Request\RequestException` comes with convenient methods that allow you to handle the Exception gracefully. They include:

#### Get Exception Code

Gets the Exception code

```php
$code = $exception->getCode();
```

#### Get Pending Request

Get the request that was sent to the Paystack api.

```php
$request = $exception->getPendingRequest();

// The body that was sent to api
$body = $exception->getPendingRequest()->body();

// Get request Method
$method = $exception->getPendingRequest()->getMethod()

// The authentication that was used
$auth = $exception->getPendingRequest()->getAuthenticator()

// The api endpoint that was called
$url = $exception->getPendingRequest()->getUrl();
```

View more methods at `Saloon\Http\Request`

#### Get API Response

Get the response that was sent by the Paystack api.

```php
$request = $exception->getResponse();

// Response status code
$body = $exception->getResponse()->status();

// Raw response body
$method = $exception->getResponse()->body()

// Json response body
$auth = $exception->getResponse()->json()

// Array response body
$auth = $exception->getResponse()->array()

// If client or server error occurred.
$url = $exception->getResponse()->array();

// Response headers.
$url = $exception->getResponse()->headers();
```

View more methods at `Saloon\Http\Response`