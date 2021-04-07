<?php

namespace App\Http\Controllers;

use App\RawMaterial;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class RawMaterialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rawmaterials = RawMaterial::all(); 
        return view('raw_material/index')->with('rawmaterials', $rawmaterials);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rawmaterial = new RawMaterial(Input::all());

        if($rawmaterial->save())
        { 
            Session::flash('notice','Raw Material ype was successfully created');
            return redirect('rawmaterials');
        }
        else
        {
            Session::flash('alert','Raw Material Type was not successfully created');
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
        //
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
        $rawmaterial = RawMaterial::find($request->id);
        $rawmaterial->update(Input::all());

        if($rawmaterial->save())
        {
            Session::flash('notice','Raw Material was successfully updated');
            return redirect('rawmaterials');
        }
        else
        {
            Session::flash('alert','Raw Material Type was not successfully updated');
            return redirect('rawmaterials');
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
         $raw_material = rawmaterial::findOrFail($id);

        $raw_material->delete();

        return redirect('rawmaterials');
    }
}
