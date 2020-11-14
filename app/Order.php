<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $gurarded = [];

    public function customer() {
        return $this->belongsTo(User::class);
    }

    public function processor() {
        return $this->hasOne(User::class,'processed_by');
    }

    public function products() {
        return $this->hasMany(OrderProduct::class);
    }
}
