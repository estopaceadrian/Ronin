<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrderDetailModel;

class OrderDetailController extends Controller
{
    //
    public function getOrders(){
        $order = OrderDetailModel::all();
        return $order;
    }

    public function postOrder(Request $request){
        $this->validate($request,[
            'Detail_ID'=> 'required',
            'detailOrderID'=> 'required',
            'customerID'=> 'required',
            'detailProductID'=> 'required',
            'detailName'=> 'required',
            'detailPrice'=> 'required',
            'image'=> 'required',
            'detailQuantity'=> 'required',
        ]
    
    );

        $cart = new OrderDetailModel;

        $cart->detailOrderID = $request->input('detailOrderID');
        $cart->customerID = $request->input('customerID');
        $cart->detailProductID = $request->input('detailProductID');
        $cart->detailName = $request->input('detailName');
        $cart->detailPrice = $request->input('detailPrice');
        $cart->image = $request->input('image');
        $cart->detailQuantity = $request->input('detailQuantity');
        $cart->save();
        return response()->json($cart, 200);
    }
}
