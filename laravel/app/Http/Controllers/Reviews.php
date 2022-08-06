<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Review;

class Reviews extends Controller
{
     //
     public function getReview(){
        $reviews = Review::all();
        //select  * from product
        return $reviews;
    }

    public function getRate(){
        $rates = Review::all();
        //select  * from product
        return $rates;
    }
}
