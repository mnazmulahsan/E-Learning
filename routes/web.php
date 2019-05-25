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

Route::get('', function () {
    return view('');
});

Route::get('/admins', function () {
    return view('admin.home');
});



Route::get('/','homeController@index');
Route::get('course','homeController@course');



//Admin Route

Route::group(['namespace' => 'Admin'], function(){
   
   //admin home route
   Route::resource('admin/category','categoryController');
   Route::resource('admin/course','courseController');
   Route::resource('admin/event','eventController');
   Route::resource('admin/teacher','teacherController');

});


//test

Route::get('/prodview','TestController@prodfunct');
Route::get('/findProductName','TestController@findProductName');
  

