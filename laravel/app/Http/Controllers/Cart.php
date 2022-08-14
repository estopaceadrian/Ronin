<?php

namespace App\Http\Controllers;

use App\Models\CartDetail;
use Illuminate\Http\Request;


class Cart extends Controller
{
    
    //
    public function getCart(){
        $order = CartDetail::all();
        return $order;
    }

    //
    public function postCart(Request $request){
        $this->validate($request,[
            'Product_ID'=>'required',
            'ProductName'=> 'required',
            'stock'=> 'required',
            'price'=> 'required',
            'discount'=> 'required',
            'type'=> 'required',
            'image'=> 'required',
        ]
    
    );

        $cart = new CartDetail;
        $cart->Product_ID = $request->input('Product_ID');
        $cart->ProductName = $request->input('ProductName');
        $cart->stock = $request->input('stock');
        $cart->price = $request->input('price');
        $cart->discount = $request->input('discount');
        $cart->type = $request->input('type');
        $cart->image = $request->input('image');
        $cart->save();
        return response()->json($cart, 200);
    }
}
