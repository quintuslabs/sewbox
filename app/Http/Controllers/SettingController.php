<?php

namespace App\Http\Controllers;

use App\Setting;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Session;

class SettingController extends Controller
{

     public function __construct() {
        $this->middleware(['auth', 'clearance'])->except('index', 'show');
    }
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
       $setting = Setting::limit(1)->get();  

       return view('settings/index')->with('setting', $setting);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store()
    {
        //
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
        $setting = Setting::find($id);
        return view('settings/edit')->with('setting', $setting);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::find($id);
        $setting->update(Input::all());
        
        if ($request->file('logo')) {
            $photo_path=$request->file('logo');
            $m_path="logo". '.' . $photo_path->getClientOriginalExtension();
            $photo_path->move('images/settings/',$m_path);   //it will be save your image on public/images folder
            $setting->update(['logo'=>"/images/settings/{$m_path}"]);
        } if ($request->file('mini_logo')) {
            $photo_path=$request->file('mini_logo');
            $m_path="mini_logo". '.' . $photo_path->getClientOriginalExtension();
            $photo_path->move('images/settings/',$m_path);   //it will be save your image on public/images folder
            $setting->update(['mini_logo'=>"/images/settings/{$m_path}"]);
        } if ($request->file('fav_icon')) {
            $photo_path=$request->file('fav_icon');
            $m_path="fav_icon". '.' . $photo_path->getClientOriginalExtension();
            $photo_path->move('images/settings/',$m_path);   //it will be save your image on public/images folder
            $setting->update(['fav_icon'=>"/images/settings/{$m_path}"]);
        }
      
        if($setting->save())
        {
            Session::flash('notice','Setting was successfully updated');
            return redirect('settings');
        }
        else
        {
            Session::flash('alert','Setting was not successfully updated');
            return redirect('settingse/edit');
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
        //
    }
}
