<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    protected $guarded = [];

    public function sales() : HasMany {
        return $this->hasMany(Sale::class);
    }

    public function stocks() : HasMany {
        return $this->hasMany(Stock::class);
    }

    public function address() : BelongsTo {
        return $this->belongsTo(Address::class);
    }
}
