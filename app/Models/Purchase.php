<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Purchase extends Model
{
    protected $guarded = [];

    public function supplier() : BelongsTo {
        return $this->belongsTo(Supplier::class);
    }

    public function detail() : MorphOne {
        return $this->morphOne(Detail::class, 'detailable');
    }
}
