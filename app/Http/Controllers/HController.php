<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\course;
use App\Http\Controllers\Controller;

class HController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    { 
        $cat = category::whereNull('parent_id')->get();

        $course = course::all();
        
        return view('user.home',compact('cat','course'));
    }
    public function course($id)
    {
        $cat = category::whereNull('parent_id')->get(); 
        $cour = course::find($id);

        return view('user.course',compact('cat','cour'));
    }

    public function contact()
    {
        $cat = category::whereNull('parent_id')->get();
        
        return view('user.contact',compact('cat'));
    }
    public function allcourse()
    {
        $cat = category::whereNull('parent_id')->get(); 
        $courses = course::all();

        return view('user.courses',compact('cat','courses'));

    }
}