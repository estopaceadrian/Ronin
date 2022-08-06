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
}
