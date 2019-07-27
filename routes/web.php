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
Route::get('/enroll/{id}','UserController@enroll')->name('enroll');
Route::get('/enrolled/{id}','UserController@enrolledCourse')->name('enrolled');
Route::get('/user/about/{id}','UserController@about')->name('user.about');
Route::get('/user/about/update/{id}','UserController@aboutedit')->name('user.aboutupdate');
Route::post('/user/about/update/{id}','UserController@aboutupdate')->name('user.aboutupdate');
Route::get('/user/about/create/{id}','UserController@aboutcreate')->name('user.aboutcreate');
Route::post('/user/about/create/{id}','UserController@aboutstore')->name('user.aboutcreate');
Route::get('/user/skills/{id}','UserController@skills')->name('user.skills');
Route::post('/user/skills/{id}','UserController@skillscreate')->name('user.skills');

//test ajax
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
   Route::resource('admin/skill','SkillController');

});

Route::group(['namespace' => 'Instructor'], function(){
   
   //Instructor route
   Route::resource('instructor/icourse','InstructorController');

});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

//instructor register

Route::prefix('instructor')->group(function(){

  Route::get('/register','Auth\InstructorRegisterController@showInstRegistrationForm')->name('instructor.register');
  Route::post('/register','Auth\InstructorRegisterController@instRegister')->name('instregister');
  Route::get('/login', 'Auth\InstructorLoginController@showLoginForm')->name('instructor.login');
  Route::post('/login', 'Auth\InstructorLoginController@login')->name('instructor.login.submit');
  Route::get('/', 'Instructor\InstructorController@index')->name('instructor.dashboard');
  Route::post('/logout', 'Auth\InstructorLoginController@logout')->name('instructor.logout');
});

Route::prefix('admin')->group(function(){

	Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
	Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
	Route::get('/', 'AdminController@index')->name('admin.dashboard');
	Route::post('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
});

