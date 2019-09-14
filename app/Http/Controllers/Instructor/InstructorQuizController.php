<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Quiz;
use App\Course;
use Auth;

class InstructorQuizController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:instructor');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
   {
       $quizzes = Quiz::where('instructor_id', Auth::user()->id)->get();
       return view('Instructor.quizzes.quiz',compact('quizzes'));
   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Auth::user()->courses;
        return view('Instructor.quizzes.add',compact('courses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'course'=>  'required',
            'question' =>  'required',
        ]);

        $quiz = new Quiz;
        $quiz->title = $request->title;
        $quiz->question = $request->question;
        $quiz->course_id = $request->course;
        $quiz->instructor_id = Auth::user()->id;
        $quiz->save();

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $quiz = Quiz::find($id);
        $courses = Auth::user()->courses;
        return view('Instructor.quizzes.update',compact('quiz','courses'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'course'=>  'required',
            'question' =>  'required',
        ]);

        $quiz = Quiz::find($id);
        $quiz->title = $request->title;
        $quiz->question = $request->question;
        $quiz->course_id = $request->course;
        $quiz->instructor_id = Auth::user()->id;
        $quiz->save();

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Quiz::where('id',$id)->delete();
        return redirect()->back();
    }
}
