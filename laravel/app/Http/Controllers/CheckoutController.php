<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use App\Models\Order;

class CheckoutController extends Controller
{
    //
    public function postOrder(Request $request){
        $this->validate($request,[
            'fullname'=>'required',
            'email'=>'required',
            'address'=>'required',
            'phone'=>'required',
            'payment_id'=>'required',
            'payment_mode'=>'required',
            'tracking_no'=>'required',
        ]
    );

        $user_id=auth('sanctum')->user()->id;
        $order = new Order();
        $order->user_id =$user_id;
        $order->fullname = $request->fullname;
        $order->email = $request->email;
        $order->address = $request->address;
        $order->phone = $request->phone;
        $order->payment_id = $request->payment_id;

        $order->payment_mode = "Credit card";
        $order->tracking_no = 'fundaecom'.rand(1111,9999);
        $order->save();

        $cart=Cart::where('user_id',$user_id)->get();
        
        $orderitems = [];

        foreach($cart as $item){
            $orderitems[] = [
                'product_id'=>$item->product_id,
                'qty'=>$item->product_qty,
                'price'=>$item->product->selling_price,
            ];

            $item-product->update([
                'qty'=>$item->product->qty - $item->product_qty
            ]);
        
        }
        $order->orderitems()->createMany($orderitems);
        Cart::destroy($cart);
    }
 
}
