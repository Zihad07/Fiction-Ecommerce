<?php

use App\Product;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = new Faker();
        factory(Product::class, 20)->create();

        $products = Product::select('id')->get();

        $products->each(function($product) {
            // $faker = new Faker();
            $product->addMediaFromUrl("https://lorempixel.com/640/480/?24010")->toMediaCollection('products');
        });

        // foreach($products as $product) {
        //     // $product->addMediaFromUrl($faker->imageUrl())->toMediaCollection('products');
        //     $product->addMediaFromUrl("https://lorempixel.com/640/480/?24010")->toMediaCollection('products');
        // }
    }
}
