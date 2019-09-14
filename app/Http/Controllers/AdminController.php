<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Skill;
use App\Course;
use App\Event;
use App\Instructor;
use App\User;


class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       $category = Category::all();
       $tc = $category->count();
       $skill = Skill::all();
       $ts = $skill->count();
       $course = Course::all();
       $tcor = $course->count();
       $event = Event::all();
       $tev = $event->count();
       $instructor = Instructor::all();
       $ti = $instructor->count();
       $user = User::all();
       $tu = $user->count();

        return view('admin.home',compact('tc','ts','tcor','tev','ti','tu'));
    }
}
