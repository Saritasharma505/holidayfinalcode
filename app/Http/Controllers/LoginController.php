<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
    	
    	

    	$username='TheHolidaysClub';
    	$password='adminadmin';


    	if($username=='TheHolidaysClub' && $password=='adminadmin'){
    		return view('admin.dashboard');
    	}
    	else
    	{
    		return "Invalid Credentials... Try Again";
    	}
    }
}
