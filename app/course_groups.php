<?php

namespace Career;

use Illuminate\Database\Eloquent\Model;

class course_groups extends Model
{
    public function course(){
    	return $this->belongsToMany(courses::class);
    }
    public function universities(){
    	return $this->belongsToMany(universities::class);
    }
}
