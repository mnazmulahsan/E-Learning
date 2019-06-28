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


Route::get('/','HController@index');
Route::get('/allcourses','HController@allcourse');
Route::get('/contact','HController@contact');
Route::get('/coursedetails/{id}','HController@course');

//test

Route::get('/prodview','TestController@prodfunct');
Route::get('/findProductName','TestController@findProductName');



//Route::get('/admins', function () {
    //return view('admin.home');
//});

//Admin Route

Route::group(['namespace' => 'Admin'], function(){
   
   //admin home route
   Route::resource('admin/category','categoryController');
   Route::resource('admin/course','courseController');
   Route::resource('admin/event','eventController');
   Route::resource('admin/teacher','teacherController');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');


Route::prefix('admin')->group(function(){

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

