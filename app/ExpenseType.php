<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ExpenseType extends Model
{
   protected $fillable = [
        'expense_type'
    ];

     public function expenses()
    {
        return $this->hasMany('App\Expense');
    } 
}
