<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\course;
use App\category;

use App\Http\Controllers\Controller;

class courseController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = course::all();
        return view('admin.courses.course',compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        // $prod=category::whereNull('parent_id')->get();
        // return view('admin.courses.add',compact('prod'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $this->validate($request,[

        //   'title' => 'required',
        //   'subtitle' => 'required',
        //   'author' => 'required',
        //   'descr' => 'required',
        //   'requirement' => 'required',
        //   'tar_audi' => 'required',
        //   'playlist' => 'required'
        // ]);
        // // return $request->all();
        // $cours = new course;
        // $cours->title = $request->title;
        // $cours->subTitle = $request->subtitle;
        // $cours->created_by = $request->author;
        // $cours->description = $request->descr;
        // $cours->requirement = $request->requirement;
        // $cours->tar_audi = $request->tar_audi;
        // $cours->playlist = $request->playlist;
        // $cours->category_id = $request->catt;
        // $cours->subcategory_id = $request->subcatt;
        // $cours->subsubcategory_id = $request->subsubcatt;

        // $cours->save();

        // return redirect(route('course.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $courses = course::where('category_id',$id)->orwhere('subcategory_id',$id)->orwhere('subsubcategory_id',$id)->get();
        // $cat = category::whereNull('parent_id')->get();
        // return view('user.courses',compact('courses','cat'));
        

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
        return view('admin.courses.update',compact('cor','prod'));
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
        $cours->description = $request->descr;
        $cours->requirement = $request->requirement;
        $cours->tar_audi = $request->tar_audi;
        $cours->category_id = $request->catt;
        $cours->subcategory_id = $request->subcatt;
        $cours->subsubcategory_id = $request->subsubcatt;
        
        $cours->save();
        return redirect(route('course.index'));
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
