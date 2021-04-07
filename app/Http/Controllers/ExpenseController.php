<?php

namespace App\Http\Controllers;


use App\Expense;
use App\ExpenseType;
use App\MasterBranch;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $expenses = Expense::all();  

       return view('expenses/index')->with('expenses', $expenses);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $expense_types = ExpenseType::all()->pluck('expense_type','id');  
        $branch = MasterBranch::all()->pluck('branch_name','id');

       return view('expenses/create')->with('expense_type', $expense_types)->with('branch', $branch);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expense = new Expense(Input::all());

        if($expense->save())
        {
            Session::flash('notice','expense was successfully created');
            return redirect('expenses');
        }
        else
        {
            Session::flash('alert','expense was not successfully created');
            return redirect('expenses/create');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $expense = Expense::find($id);
        $expense_type = ExpenseType::all()->pluck('expense_type','id');
        $branches = MasterBranch::all()->pluck('branch_name','id');
        return view('expenses/edit')->with('expense', $expense)->with('branch', $branches)->with('expense_type', $expense_type);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $expense = Expense::find($id);
        $expense->update(Input::all());
         if($expense->save())
        {
            Session::flash('notice','expense was successfully updated');
            return redirect('expenses');
        }
        else
        {
            Session::flash('alert','expense was not successfully updated');
            return redirect('expenses/edit');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
         $expense = Expense::findOrFail($id);

        $expense->delete();

        return redirect('expenses');
    }
}
