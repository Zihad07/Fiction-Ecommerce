<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function showHomePage() {
        $products = Product::select(['id', 'title', 'slug', 'price', 'sales_price'])->where('active', 1)->paginate(6);

        // $products->dd();
        return view('frontend.home',compact('products'));
    }
}
