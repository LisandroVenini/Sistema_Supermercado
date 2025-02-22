<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\SubCategory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Product extends Model
{
    protected $guarded = [];

    public function subCategory() : BelongsTo {
        return $this->belongsTo(SubCategory::class);
    }

    public function stock() : HasOne {
        return $this->hasOne(Stock::class);
    }

    public function suppliers(): BelongsToMany{
        return $this->belongsToMany(Supplier::class);
    }
}
