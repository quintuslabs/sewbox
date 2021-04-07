<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MasterBranch extends Model
{
	 protected $table = 'master_branch';

    protected $fillable = [
        'branch_name', 'branch_address', 'branch_phone', 'branch_email','branch_alt_phone'
    ];

    public function staffs()
    {
        return $this->hasMany('App\Staff');
    } 
    public function customers()
    {
        return $this->hasMany('App\Customer');
    }
    public function branch_orders()
    {
        return $this->hasMany('App\Order');
    }
    public function branch_alterations()
    {
        return $this->hasMany('App\Alteration');
    }
    public function branch_expences()
    {
        return $this->hasMany('App\Expense');
    }
    public function purchase_orders()
    {
        return $this->hasMany('App\PurchaseOrder');
    }


}
