<?php

declare(strict_types=1);

use NjoguAmos\Paystack\Enums\Currency;

it(description: 'has the correct cases', closure: function () {
    expect(value: Currency::cases())->toHaveCount(count: 5)
        ->and(value: Currency::NGN->value)->toBe(expected: 'NGN')
        ->and(value: Currency::USD->value)->toBe(expected: 'USD')
        ->and(value: Currency::GHS->value)->toBe(expected: 'GHS')
        ->and(value: Currency::ZAR->value)->toBe(expected: 'ZAR')
        ->and(value: Currency::KES->value)->toBe(expected: 'KES');
});

it(description: 'returns the correct base unit', closure: function () {
    expect(value: Currency::NGN->baseUnit())->toBe(expected: 'Kobo')
        ->and(value: Currency::USD->baseUnit())->toBe(expected: 'Cent')
        ->and(value: Currency::GHS->baseUnit())->toBe(expected: 'Pesewa')
        ->and(value: Currency::ZAR->baseUnit())->toBe(expected: 'Cent')
        ->and(value: Currency::KES->baseUnit())->toBe(expected: 'Cent');
});

it(description: 'returns the correct description', closure: function () {
    expect(value: Currency::NGN->description())->toBe(expected: 'Nigerian Naira')
        ->and(value: Currency::USD->description())->toBe(expected: 'US Dollar')
        ->and(value: Currency::GHS->description())->toBe(expected: 'Ghanaian Cedi')
        ->and(value: Currency::ZAR->description())->toBe(expected: 'South African Rand')
        ->and(value: Currency::KES->description())->toBe(expected: 'Kenyan Shilling');
});

it(description: 'returns the correct minimum transaction amount', closure: function () {
    expect(value: Currency::NGN->minimumTransaction())->toBe(expected: '₦ 50.00')
        ->and(value: Currency::USD->minimumTransaction())->toBe(expected: '$ 2.00')
        ->and(value: Currency::GHS->minimumTransaction())->toBe(expected: '₵ 0.10')
        ->and(value: Currency::ZAR->minimumTransaction())->toBe(expected: 'R 1.00')
        ->and(value: Currency::KES->minimumTransaction())->toBe(expected: 'Ksh. 1.00');
});

it(description: 'returns the correct currency symbol', closure: function () {
    expect(value: Currency::NGN->symbol())->toBe(expected: '₦')
        ->and(value: Currency::USD->symbol())->toBe(expected: '$')
        ->and(value: Currency::GHS->symbol())->toBe(expected: '₵')
        ->and(value: Currency::ZAR->symbol())->toBe(expected: 'R')
        ->and(value: Currency::KES->symbol())->toBe(expected: 'Ksh.');
});
