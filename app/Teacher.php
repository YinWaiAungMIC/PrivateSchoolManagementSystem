<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'name','gender', 'email', 'password','phone','address'
    ];

     public function subjects(){
    	return $this->belongsToMany('App\Subject')
    				->withPivot('academic_year')
    				->withTimestamps();
    }
}
