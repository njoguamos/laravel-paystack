<?php

declare(strict_types=1);

namespace NjoguAmos\Paystack\Data;

use BackedEnum;
use Spatie\LaravelData\Data;

class BaseData extends Data
{
    /**
     * Filters the current collection, returning all elements that are not null.
     *
     * @return array<string, mixed>
     */
    public function filled(): array
    {
        return collect($this->all())
            ->filter(fn ($value) => $value !== null)
            ->map(fn ($value) => $value instanceof BackedEnum ? $value->value : $value)
            ->all();
    }
}
