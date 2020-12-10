<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;




class CartController extends Controller
{
    public function showCart(){
        dd(Cart::content());
    }
    public function addToCart(Request $request){
        try {
            $this->validate($request,[
                'user_id' => 'required',
            ]);


            $product = Product::findOrFail($request->input('user_id'));

            // $demo = [
            //     'id' => (string) Str::uuid(),
            //     'name' => $product->title,
            //     'price' => $product->sales_price ?? $product->price,
            //     'quantity' => 1,
            //     'attributes' => [],
            //     'associatedModel' => $product
            // ];
            // dd($demo);



            Cart::add([
                'id' => $product->id,
                'name' => $product->title,
                'price' => $product->sales_price ?? $product->price,
                'qty' => 1,
                'attributes' => [],
                'associatedModel' => $product,
                'weight' => 0
            ]);
//            dd(Cart::content());

            // echo $request->get('user_id');
        } catch (ValidationException $e) {
            return redirect()->back();
        }

        return redirect()->back();
    }
}
