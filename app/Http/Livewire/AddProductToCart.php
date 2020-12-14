<?php

namespace App\Http\Livewire;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Request;
use Livewire\Component;

class AddProductToCart extends Component
{
    public $product;
    public function mount($product) {
        $this->product = $product;
//        dd($this->product);
    }
    public function addToCart($product_id) {
//        $this->validate($request,[
//            'user_id' => 'required',
//        ]);

//        $product = Product::findOrFail();

        $product = Product::findOrFail($product_id);
//        dd($product);
//
        Cart::add([
            'id' => $product->id,
            'name' => $product->title,
            'price' => $product->sales_price ?? $product->price,
            'qty' => 1,
            'tax' => 0.00,
            'attributes' => ['items'=>['image' => $product->getFirstMediaUrl('products')]],
            'weight' => 0
        ]);

        $this->emit('productUpdateNo');
//        dump(Cart::content());


    }
    public function render()
    {
        return view('livewire.add-product-to-cart');
    }
}
