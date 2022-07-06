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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/mypage', 'HomeController@mypage')->name('mypage');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('mypage');
Route::get('/crate', 'HomeController@crate')->name('crate');
Route::post('/crate', 'HomeController@crate')->name('crate');

Route::get('/mypage', 'MypagesController@mypage2')->name('mypage2');
Route::get('/crate', 'MypagesController@mypage2')->name('crate');
Route::post('/crate', 'MypagesController@mypage2')->name('crate');

//Auth::routes();