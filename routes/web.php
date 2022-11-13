<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\RegisterController;
use App\Http\controllers\LogInController;
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

Route::middleware('admin')->group(function () {
    //Admin section
    Route::get('/admin', 'App\Http\Controllers\Admin\AdminHomeController@index')->name("admin.home.index");

    //Admin section CRUD
    Route::get('/admin/products', 'App\Http\Controllers\Admin\AdminProductController@index')->name("admin.product.index");
    Route::post('/admin/products/store', 'App\Http\Controllers\Admin\AdminProductController@store')->name("admin.product.store");
    Route::delete('/admin/products/{id}/delete', 'App\Http\Controllers\Admin\AdminProductController@delete')->name("admin.product.delete");
    Route::get('/admin/products/{id}/edit', 'App\Http\Controllers\Admin\AdminProductController@edit')->name("admin.product.edit");
    Route::put('/admin/products/{id}/update', 'App\Http\Controllers\Admin\AdminProductController@update')->name("admin.product.update");
    Route::get('/admin/historyProduct/{id}', 'App\Http\Controllers\Admin\AdminProductHistoryController@index')->name("admin.historyProduct.index");
});
