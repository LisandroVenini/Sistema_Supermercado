<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class SubCategory extends Model
{
    protected $guarded = [];

    public function products() : HasMany {
        return $this->hasMany(Product::class);
    }

    public function category() : BelongsTo {
        return $this->belongsTo(Category::class);
    }
}
