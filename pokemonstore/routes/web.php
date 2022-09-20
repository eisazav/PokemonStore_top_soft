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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/cars', 'App\Http\Controllers\CarController@index')->name('cars.index');
Route::get('/cars/create', 'App\Http\Controllers\CarController@create')->name('cars.create');
Route::get('/cars/stats', 'App\Http\Controllers\CarController@stats')->name('cars.stats');
Route::post('/cars/save', 'App\Http\Controllers\CarController@save')->name('cars.save');
