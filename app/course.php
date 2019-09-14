<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class course extends Model
{
    public function categories()
    {
    	return $this->belongsToMany('app\category');
    }

    public function users()
    {
    	return $this->belongsToMany(User::class);
    }


    public function instructors()
    {
    	return $this->belongsToMany(Instructor::class);
    }
    public function videos()
    {
        return $this->hasMany(Video::class);
    }

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    // This function is for showing videos after enrollment and and login

    public function enrolled($c_id, $u_id){
        $course = DB::table('course_user')->where('course_id',$c_id)->where('user_id',$u_id)->get();
        if(count($course)){
            return true;
        }
        return false;
    }
}
