<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill extends Model
{
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
