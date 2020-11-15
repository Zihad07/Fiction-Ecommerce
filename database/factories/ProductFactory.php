<?php

/** @var \Illuminate\Database\Eloquent\Factory $factory */

use App\Category;
use App\Model;
use App\Product;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

$factory->define(Product::class, function (Faker $faker) {
    $title = $faker->unique()->jobTitle;
    return [
        'category_id' => Category::all()->random()->id,
        'title' => $title,
        'slug' => Str::slug($title),
        'description' => $faker->realText(),
        'price' => random_int(100, 1000),
    ];
});
