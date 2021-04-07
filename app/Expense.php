<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    
   protected $fillable = [
        'branch_id', 'expense_type_id', 'date', 'amount', 'comment'
    ];

    public function branch(){
        return $this->belongsTo('App\MasterBranch');
    }
    public function expense_type(){
        return $this->belongsTo('App\ExpenseType');
    }
    
}
