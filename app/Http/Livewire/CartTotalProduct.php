<?php

namespace App\Http\Livewire;

//use Gloudemans\Shoppingcart\Cart;
use Gloudemans\Shoppingcart\Facades\Cart;
use Livewire\Component;

class CartTotalProduct extends Component
{
    public $totalProduct;
    protected $listeners = ['productUpdateNo'];

    public function productUpdateNo() {
        $this->mount();
    }
    public function mount() {
        $this->totalProduct = Cart::count();
    }

    public function clearCart() {
        Cart::destroy();
        $this->productUpdateNo();
    }

    public function render()
    {
        return view('livewire.cart-total-product');
    }
}
