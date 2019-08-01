<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\event;

use App\Http\Controllers\Controller;

class eventController extends Controller
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
        $events = event::all();
        return view('admin.events.event',compact('events'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.events.add');
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
          'date' => 'required',
          'venue' => 'required',
          'time' => 'required',
          'speaker1' => 'required',
          'link' => 'required',
          'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images', $filename);

        }
        // return $request->all();
        $even = new event;
        $even->title = $request->title;
        $even->image = $filename;
        $even->date = $request->date;
        $even->venue = $request->venue;
        $even->time = $request->time;
        $even->description = $request->des;
        $even->speaker1 = $request->speaker1;
        $even->speaker2 = $request->speaker2;
        $even->speaker3 = $request->speaker3;
        $even->link = $request->link;
        $even->save();

        return redirect(route('event.index'));
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
        $event = event::find($id);
        return view('admin.events.update',compact('event'));
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
          'date' => 'required',
          'venue' => 'required',
          'time' => 'required',
          'speaker1' => 'required',
          'link' => 'required',
          'image' => 'required',
        ]);

        if($request->hasFile('image')){
            $filename = $request->image->getClientOriginalName();
            $request->image->storeAs('public/images', $filename);

        }
        // return $request->all();
        $even = event::find($id);
        $even->title = $request->title;
        $even->image = $filename;
        $even->date = $request->date;
        $even->venue = $request->venue;
        $even->time = $request->time;
        $even->description = $request->des;
        $even->speaker1 = $request->speaker1;
        $even->speaker2 = $request->speaker2;
        $even->speaker3 = $request->speaker3;
        $even->link = $request->link;
        $even->save();

        return redirect(route('event.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        event::where('id',$id)->delete();
        return redirect()->back();
    }
}
