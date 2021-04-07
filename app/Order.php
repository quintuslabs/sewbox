<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = [
        'customer_id', 'staff_id','branch_id','category_id','sub_category_id','bill_no','tax', 'delivery_date', 'order_amount', 'order_paid', 'order_details', 'order_status'
    ];

    public function customer()
	{
	    return $this->belongsTo('App\Customer');
	}
	public function branch()
	{
	    return $this->belongsTo('App\Branch');
	}
	public function category()
	{
	    return $this->belongsTo('App\Category');
	}
	public function sub_category()
	{
	    return $this->belongsTo('App\SubCategory');
	}
	public function staff()
	{
	    return $this->belongsTo('App\Staff');
	}
	public function measurement()
	{
	    return $this->hasOne('App\Measurement','order_id');
	}
	 public function alterations()
    {
        return $this->hasMany('App\Alteration');
    }

}
