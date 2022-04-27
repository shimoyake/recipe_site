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

/*
Route::get('/', function () {
    return view('welcome');
});
*/

// 投稿ページを表示
Route::get('/create', 'App\Http\Controllers\FormController@postpage');
// 投稿をコントローラーに送信
Route::post('/newpostsend', 'App\Http\Controllers\FormController@savenew'); 
// 投稿一覧を表示する
Route::get('/index', 'App\Http\Controllers\FormController@index');
Route::get('/show/{id}', 'App\Http\Controllers\FormController@show');
