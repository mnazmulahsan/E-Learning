<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class course extends Model
{
    public function categories()
    {
    	return $this->belongsToMany('app\category');
    }
}
