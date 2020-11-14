<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Category::class, function (Faker $faker) {
    $name = $faker->unique()->colorName;
    return [
        'name' => $name,
        'slug' => Str::slug($name),
        'banner' => $faker->imageUrl(),
    ];
});
