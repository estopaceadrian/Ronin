<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;

class TimeController extends Controller
{
    public function timeGetServerTime(){
        $time = Carbon::now();
        return response()->json(['time' => $time ]);
    }

    public function timeHelloWorld(){
        return 'Hello World';
    }
}
