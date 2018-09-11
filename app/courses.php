<?php

namespace Career;

use Illuminate\Database\Eloquent\Model;

class courses extends Model
{
    public function universities(){
    	return $this->belongsToMany(universities::class);
    }
}
