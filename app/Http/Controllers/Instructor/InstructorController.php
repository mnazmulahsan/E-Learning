<?php

namespace App\Http\Controllers\Instructor;

use Illuminate\Http\Request;
use App\course;
use App\category;
use Auth;


use App\Http\Controllers\Controller;

class InstructorController extends Controller
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
        $courses = Auth::user()->courses;
        return view('Instructor.home',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $prod=category::whereNull('parent_id')->get();
        return view('Instructor.courses.add',compact('prod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[

          'title' => 'required',
          'subtitle' => 'required',
          'descr' => 'required',
          'requirement' => 'required',
          'tar_audi' => 'required',
        ]);
        // return $request->all();
        $cours = new course;
        $cours->title = $request->title;
        $cours->subTitle = $request->subtitle;
        $cours->created_by = Auth::user()->id;
        $cours->description = $request->descr;
        $cours->requirement = $request->requirement;
        $cours->tar_audi = $request->tar_audi;
        $cours->category_id = $request->catt;
        $cours->subcategory_id = $request->subcatt;
        $cours->subsubcategory_id = $request->subsubcatt;
        $cours->save();
        $cours->instructors()->sync(Auth::user()->id, false);

        return redirect(route('icourse.index'));
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
        $cor    = course::where('id',$id)->first();
        $prod   = category::whereNull('parent_id')->get();
        return view('Instructor.courses.update',compact('cor','prod'));
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
        $this->validate($request,[

          'title' => 'required',
          'subtitle' => 'required',
          'descr' => 'required',
          'requirement' => 'required',
          'tar_audi' => 'required',
        ]);
        // return $request->all();
        $cours = course::find($id);
        $cours->title = $request->title;
        $cours->subTitle = $request->subtitle;
        $cours->created_by = Auth::user()->id;
        $cours->description = $request->descr;
        $cours->requirement = $request->requirement;
        $cours->tar_audi = $request->tar_audi;
        $cours->category_id = $request->catt;
        $cours->subcategory_id = $request->subcatt;
        $cours->subsubcategory_id = $request->subsubcatt;
        
        $cours->save();
        $cours->instructors()->sync(Auth::user()->id, false);
        return redirect(route('icourse.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $course = course::find($id);
        $course->instructors()->detach();
        $course->delete();
        return redirect()->back();
    }
}
