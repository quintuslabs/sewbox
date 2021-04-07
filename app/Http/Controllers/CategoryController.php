<?php

namespace App\Http\Controllers;

use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
class CategoryController extends Controller
{
   
/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $categories = Category::all();  

       return view('category/index')->with('categories', $categories);
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
        $category = new Category(Input::all());

        if($category->save())
        {
            Session::flash('notice','category was successfully created');
            return redirect('categories');
        }
        else
        {
            Session::flash('alert','Category was not successfully created');
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
        $category = Category::find($request->id);
        $category->update(Input::all());

        if($category->save())
        {
            Session::flash('notice','category was successfully updated');
            return redirect('categories');
        }
        else
        {
            Session::flash('alert','category was not successfully updated');
            return redirect('categories');
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
        $category = Category::findOrFail($id);

        $category->delete();

        return redirect('categories');
    }

}
