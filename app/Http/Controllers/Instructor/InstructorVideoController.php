<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\course;
use App\Video;
use Auth;
use App\Http\Controllers\Controller;

class InstructorVideoController extends Controller
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
        $videos = Video::where('instructor_id', Auth::user()->id)->get();
        return view('Instructor.video.video',compact('videos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $courses = Auth::user()->courses;
        return view('Instructor.video.add',compact('courses'));
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
            'video' =>  'required',
        ]);

        if($request->hasFile('video')){
            $filename = $request->video->getClientOriginalName();
            $request->video->storeAs('public/videos', $filename);
        }

        $video = new Video;
        $video->title = $request->title;
        $video->link = $filename;
        $video->course_id = $request->course;
        $video->instructor_id = Auth::user()->id;
        $video->save();

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
        $video = Video::find($id);
        $courses = Auth::user()->courses;
        return view('Instructor.video.update',compact('video','courses'));
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
            'video' =>  'required',
        ]);

        if($request->hasFile('video')){
            $filename = $request->video->getClientOriginalName();
            $request->video->storeAs('public/videos', $filename);
        }

        $video = Video::find($id);
        $video->title = $request->title;
        $video->link = $filename;
        $video->course_id = $request->course;
        $video->instructor_id = Auth::user()->id;
        $video->save();

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
        Video::where('id',$id)->delete();
        return redirect()->back();
    }
}
