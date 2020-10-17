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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');

Route::get("/news","App\Http\Controllers\NewsController@index")->middleware('auth');
Route::get("/news/create","App\Http\Controllers\NewsController@create")->middleware('auth');
Route::post("/news","App\Http\Controllers\NewsController@store")->middleware('auth');
Route::get("/news/{news}/edit","App\Http\Controllers\NewsController@edit")->middleware('auth');
Route::put("/news/{news}","App\Http\Controllers\NewsController@update")->middleware('auth');
Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
