<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Movie;
use App\Models\Genre;

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::get('users', 'App\Http\Controllers\UserController@index');
Route::get('users/{user}', 'App\Http\Controllers\UserController@show');
Route::post('users', 'App\Http\Controllers\UserController@store');
Route::put('users/{user}', 'App\Http\Controllers\UserController@update');
Route::delete('users/{user}', 'App\Http\Controllers\UserController@delete');

Route::get('movies', 'App\Http\Controllers\MovieController@index');
Route::get('movies/{movie}', 'App\Http\Controllers\MovieController@show');
Route::post('movies', 'App\Http\Controllers\MovieController@store');
Route::put('movies/{movie}', 'App\Http\Controllers\MovieController@update');
Route::delete('movies/{movie}', 'App\Http\Controllers\MovieController@delete');

Route::get('genres', 'App\Http\Controllers\GenreController@index');
Route::get('genres/{genre}', 'App\Http\Controllers\GenreController@show');
Route::post('genres', 'App\Http\Controllers\GenreController@store');
Route::put('genres/{genre}', 'App\Http\Controllers\GenreController@update');
Route::delete('genres/{genre}', 'App\Http\Controllers\GenreController@delete');
