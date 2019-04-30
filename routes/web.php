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

Route::get('/', 'User\PagesController@getIndex')->name('home');

Auth::routes();


Route::get('/chi-tiet', 'User\PagesController@getDetail')->name('detail');

Route::get('/danh-sach/{id}', 'User\PagesController@getList')->name('list');

//Đăng ký
Route::get('/dang-ky', 'User\PagesController@getSignUp')->name('signup');
Route::post('/dang-ky', 'User\PagesController@postSignUp')->name('postSignup');


Route::get('/dang-nhap', 'Admin\LoginController@getLogin')->name('login');


//AJAX
Route::get('/ajax/danh-sach-quan/{id}', 'User\PagesController@getQuansByAjax');


