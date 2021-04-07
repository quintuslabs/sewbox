<?php

namespace App\Http\Controllers;

use App\ExpenseType;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class ExpenseTypeController extends Controller
{
    
  /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $expensetypes = ExpenseType::all();  

       return view('expense_type/index')->with('expensetypes', $expensetypes);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        $expensetype = new ExpenseType(Input::all());

        if($expensetype->save())
        { 
            Session::flash('notice','Expense ype was successfully created');
            return redirect('expensetypes');
        }
        else
        {
            Session::flash('alert','Expense Type was not successfully created');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $expensetype = ExpenseType::find($request->id);
        $expensetype->update(Input::all());

        if($expensetype->save())
        {
            Session::flash('notice','Expense Type was successfully updated');
            return redirect('expensetypes');
        }
        else
        {
            Session::flash('alert','Expense Type was not successfully updated');
            return redirect('expensetypes');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $expense_type = ExpenseType::findOrFail($id);

        $expense_type->delete();

        return redirect('expensetypes');
    }


}
