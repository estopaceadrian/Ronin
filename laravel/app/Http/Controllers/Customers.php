<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class Customers extends Controller
{
    //
    public function getCustomer(){
        $customers = Customer::all();
        //select  * from product
        return $customers;
    }

    public function getQuantity(){
        $quantity = Customer::all();
        //select  * from product
        return $quantity;
    }

    

}
