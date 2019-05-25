<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\course;
use App\category;

use App\Http\Controllers\Controller;

class courseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.courses.course');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {  
        $prod=category::whereNull('parent_id')->get();
        return view('admin.courses.add',compact('prod'));
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
          'author' => 'required',
          'descr' => 'required'
        ]);

        $cours = new course;
        $cours->title = $request->title;
        $cours->subTitle = $request->subtitle;
        $cours->created_by = $request->author;
        $cours->description = $request->descr;
        $cours->category_id = $request->input("cat->id");
        $cours->subcategory_id = $request->input("data[i].id");
        $cours->subsubcategory_id = $request->product;

        $cours->save();

        return redirect(route('course.index'));
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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
