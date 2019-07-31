<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Instructor;
use App\Iabout;
use App\skill;

class InstructorProfileController extends Controller
{
	public function __construct()
    {
        $this->middleware('auth:instructor');
    }

    public function about($id)
    {
        $instructor = Instructor::find($id);
        $iabout     = Iabout::where('user_id', $id)->first();
        return view('instructor.profile.instructorabout', compact('instructor','iabout'));
    }

    public function create($id)
    {
    	$instructor = Instructor::find($id);
    	$skills = skill::all();
    	return view('instructor.profile.instructorcreateprofile',compact('instructor','skills'));
    }

    public function createstore(Request $request, $id)
    {
    	$this->validate($request,[
    		'fname' => 'required',
            'desig' => 'required',
    		'add' => 'required',
    		'number' => 'required',
    		'about' => 'required',
    		'fb' => 'required',
    		'linked' => 'required',
    		'git' => 'required'
    	]);

    	$about = new Iabout;
    	$about->user_id = $id;
    	$about->fullName = $request->fname;
        $about->designation = $request->desig;
    	$about->address = $request->add;
    	$about->number = $request->number;
    	$about->about = $request->about;
    	$about->image = $request->add;
    	$about->facebook = $request->fb;
    	$about->linkedin = $request->linked;
    	$about->git = $request->git;
    	$about->save();

    	return redirect(route('instructor.about',$id));
    }

    public function edit($id)
    {
        $instructor = Instructor::find($id);
        $iabout     = Iabout::where('user_id', $id)->first();
        return view('instructor.profile.instructoreditprofile', compact('instructor','iabout'));
    }

    public function updatestore(Request $request, $id)
    {
    	$this->validate($request,[
    		'fname' => 'required',
            'designation' => 'desig',
    		'add' => 'required',
    		'number' => 'required',
    		'about' => 'required',
    		'fb' => 'required',
    		'linked' => 'required',
    		'git' => 'required'
    	]);

    	$about = Iabout::where('user_id' ,$id)->first();
    	$about->user_id = $id;
    	$about->fullName = $request->fname;
        $about->designation = $request->desig;
    	$about->address = $request->add;
    	$about->number = $request->number;
    	$about->about = $request->about;
    	$about->image = $request->add;
    	$about->facebook = $request->fb;
    	$about->linkedin = $request->linked;
    	$about->git = $request->git;
    	$about->save();

    	return redirect(route('instructor.about',$id));
    }
    public function skills($id)
        {
        	$instructor = Instructor::find($id);
            $skills = skill::all();
            return view('instructor.profile.instructorcreateprofile', compact('instructor','skills'));
        }

    public function skillscreate(Request $request , $id)
    {
            $instructor = Instructor::find($id);
            $instructor->skills()->sync($request->skills, false);
            return redirect(route('instructor.about', $id));
    }
    
}
