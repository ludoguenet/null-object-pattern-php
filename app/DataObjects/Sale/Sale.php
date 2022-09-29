<?php

declare(strict_types=1);

namespace App\DataObjects\Sale;

use App\Contracts\SalePriceContract;

class Sale
{
    public function __construct(
        private readonly string $buyerName,
        private readonly SalePriceContract $price,
    )
    {}

    public function toArray(): array
    {
        return [
            'buyer_name' => $this->buyerName,
            'price' => $this->price->getPrice(),
        ];
    }
}
