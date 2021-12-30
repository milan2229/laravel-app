<?php

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

// use Illuminate\Routing\Route;
use App\Http\Middleware\HelloMiddleware;


Route::get('/', function () {
    return view('welcome');
});

Route::get('hello', 'HelloController@index')
    ->middleware('hello');//kernelのhelloグループのミドルウェアが全て実行される。
Route::post('hello', 'HelloController@post');
