<?php

declare(strict_types=1);

namespace App\Contracts;

interface SalePriceContract
{
    public function getPrice(): string;
}
