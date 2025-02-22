<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Detail extends Model
{
    protected $guarded = [];

    public function detailable() : MorphTo {
        return $this->morphTo();
    }
}
