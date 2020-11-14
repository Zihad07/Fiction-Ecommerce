<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Category extends Model
{
    protected $guarded = [];

    public function parrent_category() {
        // return $this->belongsTo(Category::class);
        return $this->belongsTo(__CLASS__);
    }

    public function child_category() {
        // return $this->hasMany(Category::class);
        return $this->hasMany(__CLASS__);
    }


    public function products() {
        return $this->hasMany(Product::class);
    }


    // mutator
    public function setSlug($value) {
        $this->attributes['slug'] = Str::slug($value);
    }
}
