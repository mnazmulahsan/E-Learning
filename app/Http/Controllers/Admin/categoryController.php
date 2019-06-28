<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\category;
use App\Http\Controllers\Controller;

class categoryController extends Controller
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
        $categories = category::all();
        return view('admin.categories.category',compact('categories'));
    }

    

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $parent = category::all();
        return view('admin.categories.add',compact('parent'));
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

          'name' => 'required',
        ]);

        $categ = new category;

        $categ->category_name = $request->name;
        $categ->parent_id = $request->parent_id=='null'?null:$request->parent_id;

        $categ->save();

        return redirect(route('category.index'));
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
        $cat    = category::where('id',$id)->first();
        $allcat = category::all();
        return view('admin.categories.update',compact('cat','allcat'));
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

          'name' => 'required',

        ]);

        $categ = category::find($id);

        $categ->category_name = $request->name;
        $categ->parent_id = $request->parent_id=='null'?null:$request->parent_id;
        $categ->save();

        return redirect(route('category.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        category::where('id',$id)->delete();

        return redirect()->back();
    }
}
