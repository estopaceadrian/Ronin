<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class Item extends Controller
{
    //
    public function getProduct(){
        $items = Product::all();
        //select  * from product
        return $items;
    }


    public function getHelmet(){
        $items = Product::where('Type',"helmet")->get();
        return $items;
    }

    public function getScooter(){
        $items = Product::where('Type',"scooter")->get();
        return $items;
    }

    public function getAccessories(){
        $items = Product::where('Type',"accessories")->get();
        return $items;
    }

    public function getOrders(Request $request){
        $this->validate($request, [
            'cart'=>'required',
        ]);

        $task = new Product;
        $task->tasks = $request->input('task');
        $task->save();
        return response()->json($task,200);
    }
}
