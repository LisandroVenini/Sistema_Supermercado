<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Sale extends Model
{
    protected $guarded = [];

    public function branch(): BelongsTo{
        return $this->belongsTo(Branch::class);
    }

    public function client() : BelongsTo {
        return $this->belongsTo(Client::class);
    }

    public function user() : BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function detail() : MorphOne {
        return $this->morphOne(Detail::class, 'detailable');
    }
    
}
