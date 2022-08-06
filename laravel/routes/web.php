<?php

use Illuminate\Support\Facades\Route;
 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/item', 'App\Http\Controllers\Item@getProduct');
Route::get('/customer', 'App\Http\Controllers\Customers@getCustomer');
Route::get('/review', 'App\Http\Controllers\Reviews@getReview');
Route::get('/quantity', 'App\Http\Controllers\Customers@getQuantity');
Route::get('/rate', 'App\Http\Controllers\Reviews@getRate');




Route::get('/', 'App\Http\Controllers\Controller@helloWorld');
// Route::get('/time', 'App\Http\Controllers\TimeController@timeGetServerTime');

//time controller
$route = '/time';
Route::get($route, 'App\Http\Controllers\TimeController@timeGetServerTime');
Route::get($route.'/helloWorld', 'App\Http\Controllers\TimeController@timeHelloWorld');