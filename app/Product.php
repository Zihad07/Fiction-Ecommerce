<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
// use Psy\Util\Str;
use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Product extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $guarded = [];

    public function category() {
        return $this->hasOne(Category::class);
    }

        // mutator
    public function setSlug($value) {
        $this->attributes['slug'] = Str::slug($value);
    }


}
