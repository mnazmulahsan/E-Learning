<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    public function course()
    {
    	return $this->belongsTo(course::class);
    }
}
