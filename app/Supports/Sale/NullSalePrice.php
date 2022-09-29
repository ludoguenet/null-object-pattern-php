<?php

declare(strict_types=1);

namespace App\Supports\Sale;

use App\Contracts\SalePriceContract;

class NullSalePrice implements SalePriceContract
{
    public function getPrice(): string
    {
        return '0';
    }
}
