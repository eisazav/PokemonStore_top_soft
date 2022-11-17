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
Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');
Route::get('language/{locale}', 'App\Http\Controllers\LocalizationController@index')->name('language.index');

Route::group(['middleware' => ['auth','admin']], function () {
    Route::get('/admin', 'App\Http\Controllers\Admin\HomeController@index')->name("admin.home");

    //CRUD Pokemons
    Route::get('/admin/pokemon', 'App\Http\Controllers\Admin\PokemonController@index')->name('admin.pokemons.list');
    Route::get('/admin/pokemon/create', 'App\Http\Controllers\Admin\PokemonController@create')->name('admin.pokemons.create');
    Route::get('/admin/pokemon/{id}', 'App\Http\Controllers\Admin\PokemonController@show')->name('admin.pokemons.show');
    Route::get('/admin/pokemon/update/{id}', 'App\Http\Controllers\Admin\PokemonController@update')->name('admin.pokemons.update');
    Route::post('/admin/pokemon/storageupdate', 'App\Http\Controllers\Admin\PokemonController@storageupdate')->name('admin.pokemons.storageupdate');
    Route::get('/admin/pokemon/destroy/{id}', 'App\Http\Controllers\Admin\PokemonController@destroy')->name('admin.pokemons.destroy');
    Route::post('/admin/pokemon/save', 'App\Http\Controllers\Admin\PokemonController@save')->name('admin.pokemons.save');
    Route::get('/admin/users/PDF', 'App\Http\Controllers\Admin\AdminUserController@pdf')->name("admin.user.pdf"); //Ruta para tener el PDF de los usuarios
    Route::get('/admin/users/Excel', 'App\Http\Controllers\Admin\AdminUserController@excel')->name("admin.user.excel"); //Ruta para tener el excel de los usuarios
});

Auth::routes();

//Routes Pokemon
Route::get('/pokemon', 'App\Http\Controllers\PokemonController@index')->name('pokemons.list');
Route::get('/pokemon/{id}', 'App\Http\Controllers\PokemonController@show')->name('pokemons.show');

//Routes Boxes
Route::get('/box', 'App\Http\Controllers\BoxController@index')->name('box.index');
Route::get('/box/{id}', 'App\Http\Controllers\BoxController@show')->name('box.show');
Route::get('/box/create', 'App\Http\Controllers\BoxController@create')->name('box.create');
Route::post('/box/save', 'App\Http\Controllers\BoxController@save')->name('box.save');

//Routes Orders
Route::get('/orders', 'App\Http\Controllers\OrderController@index')->name("orders.list");
Route::get('/orders/{id}', 'App\Http\Controllers\OrderController@show')->name("orders.show");

//Routes Cart
Route::get('/cart', 'App\Http\Controllers\CartController@index')->name("cart.index");
Route::get('/cart/add/{id}', 'App\Http\Controllers\CartController@add')->name("cart.add");
Route::get('/cart/removeAll/', 'App\Http\Controllers\CartController@removeAll')->name("cart.removeAll");
Route::get('/cart/remove/{id}', 'App\Http\Controllers\CartController@remove')->name("cart.remove");
Route::post('/cart/purchase', 'App\Http\Controllers\CartController@purchase')->name("cart.purchase");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Auth::routes();

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function () {
	Route::resource('user', 'App\Http\Controllers\UserController', ['except' => ['show']]);
	Route::get('profile', ['as' => 'profile.edit', 'uses' => 'App\Http\Controllers\ProfileController@edit']);
	Route::put('profile', ['as' => 'profile.update', 'uses' => 'App\Http\Controllers\ProfileController@update']);
	Route::put('profile/password', ['as' => 'profile.password', 'uses' => 'App\Http\Controllers\ProfileController@password']);
	Route::get('{page}', ['as' => 'page.index', 'uses' => 'App\Http\Controllers\PageController@index']);
});

