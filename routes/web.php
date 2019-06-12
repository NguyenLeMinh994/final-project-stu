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

// Nguyễn Lê Minh Begin


//Đăng ký Begin
Route::get('/dang-ky', 'User\PagesController@getSignUp')->name('signup');
Route::post('/dang-ky', 'User\PagesController@postSignUp')->name('postSignup');


Route::get('/dang-nhap', 'Admin\LoginController@getLogin')->name('login');
Route::post('/dang-nhap', 'Admin\LoginController@postLogin')->name('postLogin');
Route::get('/dang-xuat', 'Admin\LoginController@getLogout')->name('logout');
Route::get('/admin-temp', function(){
    return view('admin.layouts.master');
});
//Đăng ký End
// Nguyễn Lê Minh End

//Admin - User Begin 
// Nguyễn Lê Minh Begin
Route::prefix('user')->group(function () {

    Route::get('/', 'Admin\UserController@index')->name('user.home');

    Route::get('/bai-dang', 'Admin\ProductController@index')->name('user.post');

    Route::get('/tao-bai-dang', 'Admin\ProductController@create')->name('user.createPost');
    Route::post('/tao-bai-dang', 'Admin\ProductController@store')->name('user.postCreatePost');
     // 10/6/2019 Begin
     Route::get('/cap-nhat-bai-dang/{id}', 'Admin\ProductController@edit')->name('user.updatePost');
     Route::post('/cap-nhat-bai-dang/{id}', 'Admin\ProductController@update')->name('user.postUpdatePost');
 
     // 10/6/2019 End

    //  Ajax
    Route::get('/ajax/danh-sach-quan/{id}', 'Admin\ProductController@getQuansByAjax');
    Route::get('/ajax/xoa-bai-dang/{id}', 'Admin\ProductController@deletePostByAjax');
    Route::get('/ajax/cap-nhat-trang-thai-bai-dang/{id}', 'Admin\ProductController@updateStatusByAjax');


});

Route::prefix('admin')->group(function () {

    Route::get('/tao-danh-muc', 'Admin\CategoryController@create')->name('admin.createCategory');
    Route::post('/tao-danh-muc', 'Admin\CategoryController@store')->name('admin.postCreateCategory');

    Route::get('/cap-nhat-danh-muc/{id}', 'Admin\CategoryController@edit')->name('admin.updateCategory');
    Route::post('/cap-nhat-danh-muc/{id}', 'Admin\CategoryController@update')->name('admin.postUpdateCategory');

    Route::get('/xoa-danh-muc/{id}', 'Admin\CategoryController@ajaxDestroy')->name('admin.ajaxDestroy');
    
    Route::get('/cap-nhat-trang-thai-danh-muc/{id}', 'Admin\CategoryController@ajaxCapNhatTrangThai')->name('admin.ajaxCapNhatTrangThai');

    Route::get('/danh-muc', 'Admin\CategoryController@index')->name('admin.category');


});
// 11/6/2019 Begin
Route::get('/auth/{provider}', 'Admin\LoginController@redirectToProvider');
Route::get('/auth/{provide}/callback', 'Admin\LoginController@handleProviderCallback');
// 11/6/2019 End

// Nguyễn Lê Minh End
//Admin - User End

//Admin - User end
//AJAX Begin
// Nguyễn Lê Minh Begin
Route::get('/ajax/danh-sach-quan/{id}', 'User\AjaxController@getQuansByAjax');

// Nguyễn Lê Minh End

//AJAX End

// Trần Thanh Tuấn
Route::get('/chi-tiet/{id}', 'User\PagesController@getDetail')->name('detail');
Route::get('/danh-sach/{id}', 'User\PagesController@getList')->name('list');
Route::get('/contact','User\PagesController@contact')->name('contact');
Route::get('/about','User\PagesController@about')->name('about');
Route::get('timkiem',[
	'as'=>'/timkiem',
	'uses'=>'User\PagesController@timkiem'
]);
//Trần Thanh Tuấn END

