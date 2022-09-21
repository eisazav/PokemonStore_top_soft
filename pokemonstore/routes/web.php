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
//Routes Home
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home");
//Routes Orders
Route::get('/orders/list', 'App\Http\Controllers\OrderController@index')->name("orders.list");
Route::get('/orders/show/{id}', 'App\Http\Controllers\OrderController@show')->name("orders.show");
