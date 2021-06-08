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

// TOP
Route::get('/top', 'TopController@index');

// 写真一覧
Route::get('/photo/list', 'PhotoController@index');
Route::get('/photo/detail', 'PhotoController@detail');

// コンプ一覧
Route::get('/comp/list', 'CompController@index');

// 登録
Route::get('/register/top', 'RegisterController@index');
Route::get('/register/upload', 'RegisterController@upload_photo');
Route::get('/register/edit/series', 'RegisterController@edit_series');
Route::get('/register/edit/pose', 'RegisterController@edit_pose');
Route::get('/register/edit/member', 'RegisterController@edit_member');

// スケジュール
Route::get('/schedule', 'ScheduleController@index');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
