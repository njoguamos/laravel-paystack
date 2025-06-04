<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Requests\Transactions;

use JsonException;
use Saloon\Enums\Method;
use Saloon\Http\Request;
use Saloon\Http\Response;
use NjoguAmos\Paystack\Data\Transactions\LogData;
use NjoguAmos\Paystack\Data\Customers\CustomerData;
use NjoguAmos\Paystack\Data\Transactions\AuthorizationData;
use NjoguAmos\Paystack\Data\Transactions\TransactionResponseData;

class VerifyTransaction extends Request
{
    protected Method $method = Method::GET;

    public function __construct(public int|string $reference)
    {
    }

    /**
     * Resolves and returns the API endpoint for initializing a transaction.
     */
    public function resolveEndpoint(): string
    {
        return "/transaction/verify/{$this->reference}";
    }

    /**
     *
     * @throws JsonException
     */
    public function createDtoFromResponse(Response $response): mixed
    {
        $data = $response->json()['data'];

        $log = $data['log'];
        $logData = new LogData(
            start_time: $log['start_time'],
            time_spent: $log['time_spent'],
            attempts: $log['attempts'],
            errors: $log['errors'],
            success: $log['success'],
            mobile: $log['mobile'],
            input: $log['input'],
            history: $log['history'],
        );

        $authorization = $data['authorization'];
        $authorizationData = new AuthorizationData(
            authorization_code: $authorization['authorization_code'],
            bin: $authorization['bin'],
            last4: $authorization['last4'],
            exp_month: $authorization['exp_month'],
            exp_year: $authorization['exp_year'],
            channel: $authorization['channel'],
            card_type: $authorization['card_type'],
            bank: $authorization['bank'],
            country_code: $authorization['country_code'],
            brand: $authorization['brand'],
            reusable: $authorization['reusable'],
            signature: $authorization['signature'],
            account_name: $authorization['account_name'],
        );

        $customer = $data['customer'];
        $customerData = new CustomerData(
            id: $customer['id'],
            first_name: $customer['first_name'],
            last_name: $customer['last_name'],
            email: $customer['email'],
            customer_code: $customer['customer_code'],
            phone: $customer['phone'],
            metadata: $customer['metadata'],
            risk_action: $customer['risk_action'],
            international_format_phone: $customer['international_format_phone'],
        );

        return new TransactionResponseData(
            id: $data['id'],
            domain: $data['domain'],
            status: $data['status'],
            reference: $data['reference'],
            receipt_number: $data['receipt_number'],
            amount: $data['amount'],
            message: $data['message'],
            gateway_response: $data['gateway_response'],
            paid_at: $data['paid_at'],
            created_at: $data['created_at'],
            channel: $data['channel'],
            currency: $data['currency'],
            ip_address: $data['ip_address'],
            metadata: $data['metadata'],
            log: $logData,
            fees: $data['fees'],
            fees_split: $data['fees_split'],
            authorization: $authorizationData,
            customer: $customerData,
            plan: $data['plan'],
            split: $data['split'],
            order_id: $data['order_id'],
            paidAt: $data['paidAt'],
            createdAt: $data['createdAt'],
            requested_amount: $data['requested_amount'],
            pos_transaction_data: $data['pos_transaction_data'],
            source: $data['source'],
            fees_breakdown: $data['fees_breakdown'],
            connect: $data['connect'],
            transaction_date: $data['transaction_date'],
            plan_object: $data['plan_object'],
            subaccount: $data['subaccount']
        );
    }
}
