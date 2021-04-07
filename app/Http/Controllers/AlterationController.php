<?php

namespace App\Http\Controllers;

use App\Alteration;
use App\Order;
use App\Customer;
use App\MasterBranch;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class AlterationController extends Controller
{
    

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $alterations = Alteration::all();  

       return view('alteration/index')->with('alterations', $alterations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
    	$customers = Customer::all()->pluck('customer_name','id');
        $branchs = MasterBranch::all()->pluck('branch_name','id');
        $orders = Order::all()->pluck('order_details','id');
        return view('alteration/create')->with('customer',$customers)->with('branch',$branchs)->with('order',$orders);
       
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
    	
        $alteration = new Alteration(Input::all());

        if($alteration->save())
        {
            Session::flash('notice','alteration was successfully created');
            return redirect('alterations');
        }
        else
        {
            Session::flash('alert','alteration was not successfully created');
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
        $customers = Customer::all()->pluck('customer_name','id');
        $branchs = MasterBranch::all()->pluck('branch_name','id');
        $orders = Order::all()->pluck('order_details','id');
        $alteration = Alteration::find($id);
        return view('alteration/edit')->with('alteration',$alteration)->with('customer',$customers)->with('branch',$branchs)->with('order',$orders);
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $alteration = Alteration::find($id);
        $alteration->update(Input::all());

        if($alteration->save())
        {
            Session::flash('notice','alteration was successfully updated');
            return redirect('alterations');
        }
        else
        {
            Session::flash('alert','alteration was not successfully updated');
            return redirect('alterations');
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
        $alteration = Alteration::findOrFail($id);

        $alteration->delete();

        return redirect('alterations');
    }

}
