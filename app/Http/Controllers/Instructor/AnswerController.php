<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quiz;
use App\Answer;
use App\Mark;
use Auth;

class AnswerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:instructor');
    }

    public function all($id)
    {
    	$answers = Answer::where('instructor_id',$id)->get();
        return view('Instructor.Answers.answers',compact('answers'));
    }

    public function single($id)
    {
    	$answer = Answer::where('id',$id)->first();
        return view('Instructor.Answers.singleans',compact('answer'));
    }

    public function singlesubmit(Request $request,$id)
    {
    	$this->validate($request,[

          'mark' => 'required',
        ]);
        
        $answer = Answer::find($id);
        $mark = new Mark;
        $mark->quiz_id = $answer->quiz_id;
        $mark->user_id = $answer->user_id;
        $mark->title = $answer->title;
        $mark->question = $answer->question;
        $mark->answer = $answer->answer;
        $mark->mark = $request->mark;
        $mark->course_id = $answer->course_id;
        $mark->instructor_id = $answer->instructor_id;
        $mark->save();
        return redirect(route('all',$answer->instructor_id));
        
    }


}
