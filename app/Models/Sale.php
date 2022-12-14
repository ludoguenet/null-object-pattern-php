<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;

    protected $fillable = [
        'buyer_name',
        'price',
    ];

    protected $casts = [
        'price' => 'decimal:2',
    ];
}
