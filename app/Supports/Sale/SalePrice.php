<?php

declare(strict_types=1);

namespace App\Supports\Sale;

use App\Contracts\SalePriceContract;

class SalePrice implements SalePriceContract
{
    public function __construct(
        private readonly string $price,
    )
    {}

    public function getPrice(): string
    {
        return $this->price;
    }
}
