<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Routes Pokemon
Route::get('/pokemon', 'App\Http\Controllers\Api\PokemonApi@index')->name('api.pokemon.index');
Route::get('/pokemon/paginate', 'App\Http\Controllers\Api\PokemonApi@paginate')->name('api.pokemon.paginate');
Route::get('/pokemon/{id}', 'App\Http\Controllers\Api\PokemonApi@show')->name('api.pokemon.show');

// Routes Boxes
Route::get('/box', 'App\Http\Controllers\Api\BoxApi@index')->name('api.box.index');
Route::get('/box/paginate', 'App\Http\Controllers\Api\BoxApi@paginate')->name('api.box.paginate');
Route::get('/box/{id}', 'App\Http\Controllers\Api\BoxApi@show')->name('api.box.show');

//External API
Route::get('/news', 'App\Http\Controllers\Api\ExternalApi@index')->name('api.news');

//CompuTienda API
Route::get('/computers', 'App\Http\Controllers\Api\CompuTiendaApi@index')->name('api.computers');