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
//Login Controller
$route='/auth' ;
Route::post($route.'/login', 'App\Http\Controllers\LoginController@checkCredentials');
Route::get($route.'/login', 'App\Http\Controllers\LoginController@getCredentials');
 
$route='/order';
Route::post($route.'/checkout', 'App\Http\Controllers\CheckoutController@placeOrder');
Route::get($route.'/checkout', 'App\Http\Controllers\CheckoutController@getOrders');

Route::get('/item', 'App\Http\Controllers\Item@getProduct');
Route::get('/helmet', 'App\Http\Controllers\Item@getHelmet');
Route::get('/scooter', 'App\Http\Controllers\Item@getScooter');
Route::get('/accessories', 'App\Http\Controllers\Item@getAccessories');
// Route::get('/customer', 'App\Http\Controllers\Customers@getCustomer');
// Route::get('/review', 'App\Http\Controllers\Reviews@getReview');
// Route::get('/quantity', 'App\Http\Controllers\Customers@getQuantity');
// Route::get('/rate', 'App\Http\Controllers\Reviews@getRate');

Route::get('/cart', 'App\Http\Controllers\Cart@getCart');
Route::post('/cart', 'App\Http\Controllers\Cart@postCart');




Route::get('/', 'App\Http\Controllers\Controller@helloWorld');
// Route::get('/time', 'App\Http\Controllers\TimeController@timeGetServerTime');

//time controller
$route = '/time';
Route::get($route, 'App\Http\Controllers\TimeController@timeGetServerTime');
Route::get($route.'/helloWorld', 'App\Http\Controllers\TimeController@timeHelloWorld');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
