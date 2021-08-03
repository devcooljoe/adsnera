<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class View extends Model
{
    protected $guarded = [];
    public function task() {
        return $this->belongsTo(Task::class);
    }
}
