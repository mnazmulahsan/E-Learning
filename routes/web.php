<?php



Route::get('/','HController@index');
Route::get('/category/courses/{id}','HController@showCourse')->name('user.catwisecourse');
Route::get('/allcourses','HController@allcourse');
Route::get('/contact','HController@contact');
Route::get('/about','HController@about');
Route::get('/coursedetails/{id}','HController@course');
Route::get('/eventdetails/{id}','HController@eventDetails')->name('eventdetails');
//enrollment
Route::get('/enroll/{id}','UserController@enroll')->name('enroll');
Route::get('/enrolled/{id}','UserController@enrolledCourse')->name('enrolled');
//video showing
Route::get('/course/video/{id}','UserController@videos')->name('user.video');
//Quizzes
Route::get('/course/video/quizzes/{id}','UserController@quizzes')->name('user.quizzes');
Route::get('/course/video/quizzes/answer/{id}','UserController@answer')->name('user.answer');
Route::post('/course/video/quizzes/answer/{id}','UserController@answersubmit')->name('user.answer');
Route::get('/course/video/quizzes/marks/{id}','UserController@checkMarks')->name('user.marks');
//Route::get('/course/video/download/{id}','UserController@download')->name('user.download');
//user profile management
Route::get('/user/about/{id}','UserController@about')->name('user.about');
Route::get('/user/about/update/{id}','UserController@aboutedit')->name('user.aboutupdate');
Route::post('/user/about/update/{id}','UserController@aboutupdate')->name('user.aboutupdate');
Route::get('/user/about/create/{id}','UserController@aboutcreate')->name('user.aboutcreate');
Route::post('/user/about/create/{id}','UserController@aboutstore')->name('user.aboutcreate');
Route::get('/user/skills/{id}','UserController@skills')->name('user.skills');
Route::post('/user/skills/{id}','UserController@skillscreate')->name('user.skills');

//instructor profile management
Route::get('/instructor/about/{id}','Instructor\InstructorProfileController@about')->name('instructor.about');
Route::get('/instructor/update/{id}','Instructor\InstructorProfileController@edit')->name('instructor.editprofile');
Route::post('/instructor/update/{id}','Instructor\InstructorProfileController@updatestore')->name('instructor.editprofile');
Route::get('/instructor/create/{id}','Instructor\InstructorProfileController@create')->name('instructor.createprofile');
Route::post('/instructor/create/{id}','Instructor\InstructorProfileController@createstore')->name('instructor.createprofile');
Route::get('/instructor/skills/{id}','Instructor\InstructorProfileController@skills')->name('instructor.skills');
Route::post('/instructor/skills/{id}','Instructor\InstructorProfileController@skillscreate')->name('instructor.skills');

//test ajax category
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
   Route::resource('instructor/video','InstructorVideoController');
   Route::resource('instructor/quiz','InstructorQuizController');
   Route::get('instructor/quiz/answers/{id}', 'AnswerController@all')->name('all');
   Route::get('instructor/quiz/answer/{id}', 'AnswerController@single')->name('single');
   Route::post('instructor/quiz/answer/{id}', 'AnswerController@singlesubmit')->name('single');




});

//answer review





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

