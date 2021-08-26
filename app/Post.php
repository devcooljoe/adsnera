<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class Post extends Pivot
{
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }
}
