<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\Http\Controllers\Controller;

class homeController extends Controller
{
    public function index()
    { 
        $cat = category::whereNull('parent_id')->get();
        
        return view('user.home',compact('cat'));
    }

    public function course()
    {
        
        return view('user.courses');
    }
}
