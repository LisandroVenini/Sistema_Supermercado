<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Supplier extends Model
{
    protected $guarded = [];

    public function purchases() : HasMany {
        return $this->hasMany(Purchase::class);
    }

    public function address() : BelongsTo {
        return $this->belongsTo(Address::class);
    }

    public function products() : BelongsToMany {
        return $this->belongsToMany(Product::class);
    }
}
