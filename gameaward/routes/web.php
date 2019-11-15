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

Route::get('trang-chu','pageController@getTrangchu');
Route::get('gioi-thieu','pageController@getGioithieu');
Route::get('binh-chon','pageController@getBinhchon');
Route::get('xep-hang','pageController@getXephang');
Route::get('dang-nhap','pageController@getDangnhap');