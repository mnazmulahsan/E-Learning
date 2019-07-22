<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Http\Controllers\Controller;
use App\Instructor;

class InstructorRegisterController extends Controller
{
    public function showInstRegistrationForm()
    {
    	return view('auth.instructor-register');
    }

    public function instRegister(Request $request)
    {
    	$this->validate($request,[
    		'name' => 'required|max:255',
    		'email' => 'required|max:255|email',
    		'password' => 'required|confirmed|min:6',
    	]);

    	$instructor = new Instructor;
    	$instructor->name = $request->name;
    	$instructor->email = $request->email;
    	$instructor->password = Hash::make($request->password);
    	$instructor->save();
    	return redirect('instructor/icourse');
    }
}
