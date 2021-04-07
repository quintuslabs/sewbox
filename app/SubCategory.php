<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
     protected $fillable = [
        'name','category_id'
    ];

    public function category(){
        return $this->belongsTo('App\Category');
    }
    public function sub_category_orders(){
        return $this->belongsTo('App\Category');
    }

}
