<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PurchaseOrder extends Model
{
   protected $fillable = [
        'branch_id', 'raw_material_id', 'vendor_id', 'po_date', 'po_no', 'quantity', 'amount'
    ];

    public function branch(){
        return $this->belongsTo('App\MasterBranch');
    }
    public function raw_material(){
        return $this->belongsTo('App\RawMaterial');
    }
    public function vendor(){
        return $this->belongsTo('App\Vendor');
    }

}
