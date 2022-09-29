<?php

declare(strict_types=1);

namespace App\Actions\Sale;

use App\DataObjects\Sale\Sale;

class CreateSaleAction
{
    public function handle(Sale $dataObject): \App\Models\Sale
    {
        return \App\Models\Sale::create(
            attributes: $dataObject->toArray(),
        );
    }
}
