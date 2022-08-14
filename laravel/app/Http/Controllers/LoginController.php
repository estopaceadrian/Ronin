<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class LoginController extends Controller
{
    //
    public function checkCredentials(Request $request){
        $user = Customer::where('email',$request->input('email'))->get();
        return $user;
    }

    public function getCredentials(){
        $customers = Customer::all();
        //select  * from product
        return $customers;
 
    }
}
