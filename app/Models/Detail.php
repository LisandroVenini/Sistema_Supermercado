<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Detail extends Model
{
    protected $fillable = [
        'detailable_id',
        'detailable_type',
        'product_id',
        'quantity',
        'unit_price',
        'subtotal'
    ];
}
