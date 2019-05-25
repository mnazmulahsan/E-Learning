<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    public function childs(){
    	return category::where('parent_id',$this->id)->orderBy('category_name','asc')->get();
    }

   

    
}
