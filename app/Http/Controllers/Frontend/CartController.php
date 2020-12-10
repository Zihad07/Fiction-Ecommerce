<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    public function showCart(){

    }

    public function addToCart(Request $request){
        try {
            $this->validate($request,[
                'user_id' => 'required',
            ]);

            echo $request->get('user_id');
        } catch (ValidationException $e) {
            return redirect()->back();
        }
    }
}
