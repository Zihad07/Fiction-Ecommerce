<?php

namespace App\Http\Livewire;

use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartStatus extends Component
{
    public $products;
    public $total_price = 0;
    public $discount = 0;
    public $total = 0;
//    public $imgage_src = '';
    public function mount() {
        $this->products = [];
        $this->total_price = $this->total = Cart::subTotal();
        $all_products = Cart::content()->toarray();
        foreach ($all_products as $each_product) {
            $each_product['image'] = $this->getImageSrc($each_product['id']);
            array_push($this->products, $each_product);
        }
//        $this->products = Cart::content()->toArray();




//        dd($this->products);
    }


    public function removeItem($rowId) {
//        dd($rowId);
//        dd(Cart::get($rowId));
        Cart::remove($rowId);
        $this->mount();
    }

    public function getImageSrc($image_id) {
        $image_src = Product::find($image_id)->getFirstMediaUrl('products');
        return $image_src ?? null;
    }
    public function render()
    {
        return view('livewire.cart-status');
    }
}
