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
Route::get('/', 'App\Http\Controllers\PokemonController@index')->name('home.index');
Route::get('language/{locale}', 'App\Http\Controllers\LocalizationController@index')->name('language.index');

//Routes Pokemon
Route::get('/pokemon', 'App\Http\Controllers\PokemonController@index')->name('pokemons.list');
Route::get('/pokemon/create', 'App\Http\Controllers\PokemonController@create')->name('pokemons.create');
Route::get('/pokemon/{id}', 'App\Http\Controllers\PokemonController@show')->name('pokemons.show');
Route::get('/pokemon/update/{id}', 'App\Http\Controllers\PokemonController@update')->name('pokemons.update');
Route::post('/pokemon/storageupdate', 'App\Http\Controllers\PokemonController@storageupdate')->name('pokemons.storageupdate');
Route::get('/pokemon/destroy/{id}', 'App\Http\Controllers\PokemonController@destroy')->name('pokemons.destroy');
Route::post('/pokemon/save', 'App\Http\Controllers\PokemonController@save')->name('pokemons.save');


//Routes Boxes
Route::get('/box', 'App\Http\Controllers\BoxController@index')->name('box.index');
Route::get('/box/{id}', 'App\Http\Controllers\BoxController@show')->name('box.show');
Route::get('/box/create', 'App\Http\Controllers\BoxController@create')->name('box.create');
Route::post('/box/save', 'App\Http\Controllers\BoxController@save')->name('box.save');

//Routes Home
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home.home");

//Routes Orders
Route::get('/orders', 'App\Http\Controllers\OrderController@index')->name("orders.list");
Route::get('/orders/{id}', 'App\Http\Controllers\OrderController@show')->name("orders.show");

//Routes Cart
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");
Route::get('/cart/remove/{id}', 'App\Http\Controllers\CartController@remove')->name("cart.remove");
Route::post('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");


