<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
   protected $fillable = [
        'name','dateofbirth','gender', 'email', 'password','phone','address'
    ];

    public function exams(){
    	return $this->belongsToMany('App\Exam')
    				->withPivot('mark')
    				->withTimestamps();
    }
}
