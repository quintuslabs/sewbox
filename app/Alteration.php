<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alteration extends Model
{
    protected $fillable = [
        'customer_id', 'branch_id','order_id','delivery_date', 'comment'
    ];

    public function branch()
	{
	    return $this->belongsTo('App\MasterBranch');
	}

	 public function order(){
        return $this->belongsTo('App\Order');
    }
     public function customer()
	{
	    return $this->belongsTo('App\Customer');
	}
}
