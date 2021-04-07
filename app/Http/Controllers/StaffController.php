<?php

namespace App\Http\Controllers;

use App\Staff;
use App\Salary;
use App\MasterBranch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class StaffController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $staffs = Staff::all()->where('staff_delete', '0');
        return view('staff/index')->with('staffs', $staffs);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $branch = MasterBranch::all()->pluck('branch_name','id');
        return view('staff/create')->with('branch', $branch);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        date_default_timezone_set("Asia/Calcutta");
        $staff = new Staff();

        if ($request->hasFile('pan_card')) {
            $random=rand(100000, 999999);
            $file = $request->file('pan_card');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $random.'.'.$extension;
            $file->move('images/staffs/', $filename);
            $staff->pan_card = 'images/staffs/'.$filename;
        }
        if ($request->hasFile('adhar_card')) {
            $random=rand(100000, 999999);
            $file = $request->file('adhar_card');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $random.'.'.$extension;
            $file->move('images/staffs/', $filename);
            $staff->adhar_card = 'images/staffs/'.$filename;
        }
        if ($request->hasFile('electric_bill')) {
            $random=rand(100000, 9999999);
            $file = $request->file('electric_bill');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $random.'.'.$extension;
            $file->move('images/staffs/', $filename);
            $staff->electric_bill = 'images/staffs/'.$filename;
        }

       $staff->branch_id = $request->branch_id;
       $staff->staff_name = $request->staff_name;
       $staff->staff_phone = $request->staff_phone;
       $staff->staff_email = $request->staff_email;
       $staff->staff_address = $request->staff_address;
       $staff->staff_sex = $request->staff_sex;
       $staff->staff_salary = $request->staff_salary;
       //$staff->profile_image = $request->profile_image;
       $staff->alt_phone = $request->alt_phone;
       $staff->dob = $request->dob;
      
        if($staff->save())
        {
            Session::flash('notice','Staff was successfully created');
            return redirect('staffs');
        }
        else
        {
            Session::flash('alert','Staff was not successfully created');
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
        $staff = Staff::find($id);
        $staff_salary = Salary::all()->where('staff_id', $id);

        return view('staff/show')->with('staff', $staff)->with('staff_salary', $staff_salary);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $branch = MasterBranch::all()->pluck('branch_name','id');
        $staff = Staff::find($id);
        return view('staff/edit')->with('staff', $staff)->with('branch', $branch);
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
        $staff = Staff::find($id);
        $staff->update(Input::all());


        if ($request->hasFile('pan_card')) {
            $random=rand(100000, 999999);
            $file = $request->file('pan_card');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $random.'.'.$extension;
            $file->move('images/staffs/', $filename);
            $staff->update(['pan_card'=>"images/staffs/{$filename}"]);
            
        }
        if ($request->hasFile('adhar_card')) {
            $random=rand(100000, 999999);
            $file = $request->file('adhar_card');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $random.'.'.$extension;
            $file->move('images/staffs/', $filename);
            $staff->update(['adhar_card'=>"images/staffs/{$filename}"]);
        }
        if ($request->hasFile('electric_bill')) {
            $random=rand(100000, 9999999);
            $file = $request->file('electric_bill');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = $random.'.'.$extension;
            $file->move('images/staffs/', $filename);
            $staff->update(['electric_bill'=>"images/staffs/{$filename}"]);
           
        }


        if($staff->save())
        {
            Session::flash('notice','Staff was successfully updated');
            return redirect('staffs');
        }
        else
        {
            Session::flash('alert','Staff was not successfully updated');
            return redirect('staffs/edit');
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
        $staff = Staff::find($id);
        $staff->staff_delete ='1';
        
        if ($staff->save())
        {
            return redirect('staffs');
        }   
    }
}
