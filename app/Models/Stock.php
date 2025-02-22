<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Stock extends Model
{
    protected $guarded = [];

    public function branch(): BelongsTo{
        return $this->belongsTo(Branch::class);
    }

    public function product() : BelongsTo {
        return $this->belongsTo(Product::class);
    }
}
