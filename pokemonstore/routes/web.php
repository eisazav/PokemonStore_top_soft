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

Route::get('/cars', 'App\Http\Controllers\CarController@index')->name('cars.index');
Route::get('/cars/create', 'App\Http\Controllers\CarController@create')->name('cars.create');
Route::get('/cars/stats', 'App\Http\Controllers\CarController@stats')->name('cars.stats');
Route::post('/cars/save', 'App\Http\Controllers\CarController@save')->name('cars.save');
//Routes Home
Route::get('/home', 'App\Http\Controllers\HomeController@index')->name("home");
//Routes Orders
Route::get('/orders/list', 'App\Http\Controllers\OrderController@index')->name("orders.list");
Route::get('/orders/show/{id}', 'App\Http\Controllers\OrderController@show')->name("orders.show");
Route::get('/', function () {
    return view('home');
})->middleware('auth');

Route::get('/register',[RegisterController::class, 'create'])
    ->middleware('guest')
    ->name('register.index');

Route::post('/register',[RegisterController::class, 'store'])
    ->name('register.store');

Route::get('/login',[LogInController::class, 'create'])
    ->middleware('guest')
    ->name('login.index');

Route::post('/login',[LogInController::class, 'store'])
    ->name('login.store');

Route::get('/logout',[LogInController::class, 'destroy'])
    ->middleware('auth')
    ->name('login.destroy');

Route::get('/admin', [AdminController::class, 'index'])
    ->middleware('auth.admin')
    ->name('admin.index');
