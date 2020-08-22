<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model
{
    protected $fillable = [
    	'student_id','class_types_id','academic_year','register_date'
       
    ];
}
