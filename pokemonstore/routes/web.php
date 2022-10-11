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
Route::get('/', 'App\Http\Controllers\PokemonController@index')->name('pokemons.index');

//Routes Pokemon
Route::get('/pokemon', 'App\Http\Controllers\PokemonController@index')->name('pokemons.index');
Route::get('/pokemon/{id}', 'App\Http\Controllers\PokemonController@show')->name('pokemons.show');
Route::get('/pokemon/create', 'App\Http\Controllers\PokemonController@create')->name('pokemons.create');
Route::post('/pokemon/save', 'App\Http\Controllers\PokemonController@save')->name('pokemons.save');

//Routes Boxes
Route::get('/box', 'App\Http\Controllers\BoxController@index')->name('box.index');
Route::get('/box/{id}', 'App\Http\Controllers\BoxController@show')->name('box.show');
Route::get('/box/create', 'App\Http\Controllers\BoxController@create')->name('box.create');
Route::post('/box/save', 'App\Http\Controllers\BoxController@save')->name('box.save');

//Routes Home
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home.home");

//Routes Orders
Route::get('/orders/list', 'App\Http\Controllers\OrderController@index')->name("orders.list");
Route::get('/orders/show/{id}', 'App\Http\Controllers\OrderController@show')->name("orders.show");
Route::get('/orders/create', 'App\Http\Controllers\OrderController@create')->name("orders.create");
Route::post('/orders/save', 'App\Http\Controllers\OrderController@save')->name("orders.save");

//Routes register
Route::get('/register','App\Http\Controllers\RegisterController@create')
    ->middleware('guest')
    ->name('register.index');

Route::post('/register','App\Http\Controllers\RegisterController@store')
    ->name('register.store');

Route::get('/login','App\Http\Controllers\LogInController@create')
    ->middleware('guest')
    ->name('login.index');

Route::post('/login','App\Http\Controllers\LogInController@store')
    ->name('login.store');

Route::get('/logout','App\Http\Controllers\LogInController@destroy')
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', 'App\Http\Controllers\AdminController@index')
    ->middleware('auth')
    ->name('admin.index');
