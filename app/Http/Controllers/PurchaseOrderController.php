<?php

namespace App\Http\Controllers;

use App\PurchaseOrder;
use App\MasterBranch;
use App\Vendor;
use App\RawMaterial;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class PurchaseOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $purchase_orders = PurchaseOrder::all();
        return view('purchase_order/index')->with('purchase_orders', $purchase_orders);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = MasterBranch::all()->pluck('branch_name','id');
        $raw_material = RawMaterial::all()->pluck('material_name','id');
        $vendor = Vendor::all()->pluck('name','id');
        return view('purchase_order/create')->with('branch', $branch)->with('raw_material', $raw_material)->with('vendor', $vendor);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      $purchase_order = new PurchaseOrder(Input::all());

        if($purchase_order->save())
        {
            Session::flash('notice','PurchaseOrder was successfully created');
            return redirect('purchaseorders');
        }
        else
        {
            Session::flash('alert','PurchaseOrder was not successfully created');
            return redirect('purchaseorders/create');
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
        $purchase_orders = PurchaseOrder::find($id);
        $branch = MasterBranch::all()->pluck('branch_name','id');
        $raw_material = RawMaterial::all()->pluck('material_name','id');
        $vendor = Vendor::all()->pluck('name','id');
        return view('purchase_order/edit')->with('purchase_orders', $purchase_orders)->with('branch', $branch)->with('raw_material', $raw_material)->with('vendor', $vendor);
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
        
        $purchase_order = PurchaseOrder::find($id);
        $purchase_order->update(Input::all());

        if($purchase_order->save())
        {
            Session::flash('notice','Purchase Order was successfully updated');
            return redirect('purchaseorders');
        }
        else
        {
            Session::flash('alert','Purchase Order was not successfully updated');
            return redirect('purchaseorders/create');
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
       $purchase_order = PurchaseOrder::findOrFail($id);

       $purchase_order->delete();

       return redirect('purchaseorders');
    }
}
