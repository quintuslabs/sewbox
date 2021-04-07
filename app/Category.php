<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	 protected $table = 'categories';
     protected $fillable = [
        'name'
    ];

    public function sub_categories(){
        return $this->hasMany('App\SubCategory');
    }
    public function category_orders(){
        return $this->hasMany('App\Order');
    }

}
