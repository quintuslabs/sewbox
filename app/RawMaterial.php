<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class RawMaterial extends Model
{
    protected $fillable = [
        'material_name'
    ];

    public function purchase_orders()
    {
        return $this->hasMany('App\PurchaseOrder');
    }
}
