<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentRecord extends Model
{
    protected $fillable = [
    	'registration_id','payment_type','payment_fee','pay_date'
       
    ];
}
