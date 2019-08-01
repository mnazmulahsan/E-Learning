<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\course;
use App\Instructor;
use App\Iabout;
use App\event;
use App\Http\Controllers\Controller;

class HController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    public function index()
    { 
        $cat = category::whereNull('parent_id')->get();
        $course = course::orderBy('id','asc')->take(6)->get();
        $ilist = Iabout::orderBy('id','asc')->take(4)->get();
        $events = event::all();
        return view('user.home',compact('cat','course','ilist','events'));
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

    public function about()
    {
        $cat = category::whereNull('parent_id')->get();
        
        return view('user.about',compact('cat'));
    }
    public function allcourse()
    {
        $cat = category::whereNull('parent_id')->get(); 
        $courses = course::all();

        return view('user.courses',compact('cat','courses'));

    }

    public function showCourse($id)
    {
        $courses = course::where('category_id',$id)->orwhere('subcategory_id',$id)->orwhere('subsubcategory_id',$id)->get();
        $cat = category::whereNull('parent_id')->get();
        return view('user.courses',compact('courses','cat'));
        
    }

    public function EventDetails($id)
    {
        $event = event::find($id);
    }

}