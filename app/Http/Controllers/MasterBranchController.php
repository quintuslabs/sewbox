<?php

namespace App\Http\Controllers;

use App\MasterBranch;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class MasterBranchController extends Controller
{
        /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $masterbranches = MasterBranch::all();
        return view('master_branch.index', ['masterbranches' => $masterbranches]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('master_branch/create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $masterbranch = new MasterBranch(Input::all());

        if($masterbranch->save())
        {
            Session::flash('notice','Master Branch was successfully created');
            return redirect('masterbranches');
        }
        else
        {
            Session::flash('alert','Master Branch was not successfully created');
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
        $masterbranch = MasterBranch::find($id);
        return view('master_branch/show')->with('masterbranch', $masterbranch);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
         $masterbranch = MasterBranch::find($id);
        return view('master_branch/edit')->with('masterbranch', $masterbranch);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update($id)
    {
        $masterbranch = MasterBranch::find($id);
        $masterbranch->update(Input::all());

        if($masterbranch->save())
        {
            Session::flash('notice','MasterBranch was successfully updated');
            return redirect('masterbranches');
        }
        else
        {
            Session::flash('alert','Master Branch was not successfully updated');
            return redirect('master_branch/edit');
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
    $masterbranch = MasterBranch::findOrFail($id);

    $masterbranch->delete();

    return redirect('masterbranches');
    }
}
