<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [];

    public function subCategories() : HasMany {
        return $this->hasMany(SubCategory::class);
    }
}
