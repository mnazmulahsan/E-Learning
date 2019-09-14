<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class TestController extends Controller
{
	// public function __construct()
	// {
	//     $this->middleware('auth:instructor');
	// }
	
    public function prodfunct(){

		$prod=category::whereNull('parent_id')->get();
		return view('admin.courses.test',compact('prod'));

	}

	public function findProductName(Request $request){

        $data=category::where('parent_id',$request->id)->get();
        return response()->json($data);//sent this data to ajax success
	}


	
}
