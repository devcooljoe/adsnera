<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Earning extends Model
{
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function task() {
        return $this->belongsTo(Task::class);
    }
}
