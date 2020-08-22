<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    protected $fillable = [
        'name','fee'
    ];

    public function teachers(){
    	return $this->belongsToMany('App\Teacher')
    				->withPivot('academic_year')
    				->withTimestamps();
    }
}
