<?php

declare(strict_types=1);

use App\Actions\Sale\CreateSaleAction;
use Illuminate\Support\Facades\Route;

Route::get('/', static function () {
    $sale1 = (new CreateSaleAction)
        ->handle(
            dataObject: new \App\DataObjects\Sale\Sale(
                buyerName: 'Truc',
                price: (new \App\Supports\Sale\SalePrice("25.50")),
            )
        );

    $sale2 = (new CreateSaleAction)
        ->handle(
            dataObject: new \App\DataObjects\Sale\Sale(
                buyerName: 'Truc',
                price: (new \App\Supports\Sale\NullSalePrice())
            )
        );

    dd(
        $sale1->price,
        $sale2->price,
    );
});
