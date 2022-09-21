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