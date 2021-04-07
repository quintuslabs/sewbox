<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = [
        'name', 'phone', 'alt_phone', 'email', 'address'
    ];
    public function purchase_orders()
    {
        return $this->hasMany('App\PurchaseOrder');
    }
}
