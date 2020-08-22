<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    protected $fillable = [
    	'name','exam_date','year'
       
    ];

    public function students(){
    	return $this->belongsToMany('App\Student')
    				->withPivot('mark')
    				->withTimestamps();
    }
}
