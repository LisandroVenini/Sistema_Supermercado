<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Address extends Model
{
    protected $guarded = [];

    public function branch() : HasOne {
        return $this->hasOne(Branch::class);
    }

    public function supplier() : HasOne {
        return $this->hasOne(Supplier::class);
    }
}
