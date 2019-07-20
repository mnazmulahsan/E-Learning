<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\course;
use App\User;
use App\category;
use Auth;
use Session;


class UserController extends Controller
{
    public function enroll($id)
    {
    	$course = course::find($id);

        $course->users()->sync(Auth::user()->id, false);
        Session::flash('success', 'Enrolled successfully');
    	//return view('enrolled.greeting');
    	return redirect()->back();
    }

    public function enrolledCourse($id)
    {
    	$cat = category::whereNull('parent_id')->get();
    	$user = User::find($id);

        return view('enrolled.enrolled', compact('user','cat'));

    }
}
