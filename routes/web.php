<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers;

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
// if the user comes to /hello with GET request method,
// handle the request by the index method
// of the App\Http\Controllers\IndexController class
Route::get('/hello', ['App\Http\Controllers\IndexController', 'index']);
Route::get('/top-rated-movies', ['App\Http\Controllers\MovieController','topRated']);
Route::get('/top-rated-games',['App\Http\Controllers\VideogameController','topRated']);
Route::get('/movies/shawshank-redemption',['App\Http\Controllers\MovieController','shawshank']);
Route::get('/movies/search',['App\Http\Controllers\MovieController','search']);
Route::get('/movies', ['App\Http\Controllers\MovieController', 'index']);
Route::post('/movies/rate', ['App\Http\Controllers\ReviewController', 'store']);

