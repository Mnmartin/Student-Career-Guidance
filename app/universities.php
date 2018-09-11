<?php

namespace Career;

use Illuminate\Database\Eloquent\Model;

class universities extends Model
{
    public function courses(){
    return $this->belongsToMany(courses::class);
    }
}
