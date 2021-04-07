<?php

namespace App\Http\Controllers;

use App\SubCategory;
use App\Category;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;
class SubCategoryController extends Controller
{
   
/**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $categories = Category::all();  
       $sub_categories = SubCategory::all();  

       return view('sub_category/index')->with('sub_categories', $sub_categories)->with('categories', $categories);
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
        $subCategory = new SubCategory(Input::all());

        if($subCategory->save())
        {
            Session::flash('notice','SubCategory was successfully created');
            return redirect('subcategories');
        }
        else
        {
            Session::flash('alert','SubCategory was not successfully created');
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
       $categories = Category::all();  
       $sub_category = SubCategory::find($id);
       return view('sub_category/edit')->with('sub_category', $sub_category)->with('categories', $categories);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $subcategory = SubCategory::find($id);
        $subcategory->update(Input::all());

        if($subcategory->save())
        {
            Session::flash('notice','SubCategory was successfully updated');
            return redirect('subcategories');
        }
        else
        {
            Session::flash('alert','subCategory was not successfully updated');
            return redirect('subcategories');
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
        $subcategory = SubCategory::findOrFail($id);

        $subcategory->delete();

        return redirect('subcategories');
    }


    public function create_category()
        {
         $category = new Category(Input::all());

        if($category->save())
        {
            Session::flash('notice','Category was successfully created');
            return redirect('subcategories');
        }
        else
        {
            Session::flash('alert','Category was not successfully created');
        }
            
    }

}
