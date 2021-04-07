<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'customer_name', 'customer_phone', 'customer_email', 'customer_address','anniversary_date', 'customer_sex','branch_id','customer_dob'
    ];
    
	public function orders()
	{
	    return $this->hasMany('App\Order','customer_id');
	}
   public function branch(){
        return $this->belongsTo('App\MasterBranch');
    }
     public function alterations()
    {
        return $this->hasMany('App\Alteration');
    }

}
