<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $guarded = [];
    public function user() {
        return $this->belongsTo(User::class);
    }
    public function view() {
        return $this->hasMany(View::class);
    }
    public function earning() {
        return $this->hasMany(Earning::class);
    }
    public function lead() {
        return $this->hasMany(Lead::class);
    }

}
