<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class InstructorLoginController extends Controller
{
	public function __construct()
    {
        $this->middleware('guest:instructor', ['except' => 'logout']);
    }

    public function showLoginForm()
    {
        return view('auth.instructor-login');
    }

    public function login(Request $request){

    	//validate the form data
        $this->validate($request, [
           
           'email'    => 'required|email',
           'password' => 'required|min:6'

        ]);

    	//attemt to log the user in

        if(Auth::guard('instructor')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember))
        {
        	//if successful , then redirect to their location

        	return redirect()->intended(route('instructor.dashboard'));
        }	

    	//if unsuccessful , then redirect back to to the login with form data
    	return redirect()->back()->withInput($request->only('email', 'remember'));
    }

    public function logout()
    {
        Auth::guard('instructor')->logout();

        return redirect('/');
    }


}
