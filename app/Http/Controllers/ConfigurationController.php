<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Configuration;
use Illuminate\Support\Facades\Session;
use DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\RedirectRespones;


class ConfigurationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $conf=DB::table('tbl_admins')->get();
        return view('admin.configurations.index',compact('conf'));
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
        //
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

        $conf= Configuration::where('id',$id)->get();
        // dd($conf);die();
        return view('admin.configurations.edit', compact('conf'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $id = $request->input('id');
        $admin_id = $request->input('admin_id');
        $site_name = $request->input('site_name');
        $admin_amount = $request->input('admin_amount');
        $amc_amount = $request->input('amc_amount');

        $data =Configuration::where('id',$id)->update(['admin_id'=>$admin_id, 'site_name'=>$site_name, 'admin_amount'=>$admin_amount, 'amc_amount'=>$amc_amount] );
       // dd($data); die();
       return redirect()->action('ConfigurationController@index');



    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $del=DB::table('tbl_admins')->where('id', $id)->delete();
         //Message Print
         Session::flash('message', 'Delete Yes');
         return back();
    }
}
