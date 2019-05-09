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
    return view('frontend');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



//->> Start Multi Auth Route

Route::GET('admin/home','AdminController@index')->name('admin.home');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');

Route::POST('admin','Admin\LoginController@login');

Route::POST('admin/logout','Admin\LoginController@logout')->name('admin.logout');

Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
//->> End Multi Auth Route


//->> Start Admin Profile

Route::resource('/admin/profile', 'AdminController');
Route::GET('admin/profile','AdminController@profile')->name('admin.profile');
Route::GET('admin/setting','AdminController@setting')->name('admin.setting');

//->> End Admin Profile






//->> Start Verified Email
Route::GET('/verifyEmailFirst','Auth\RegisterController@verifyEmailFirst')->name('verifyEmailFirst');

Route::GET('/verify/{email}/{verifyToken}','Auth\RegisterController@sendEmailDone')->name('sendEmailDone');
//->> End Verified Email



//->> Start Currency
Route::resource('/admin/currency', 'CurrencyController');