<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use Session;

class adminController extends Controller
{
    //
    public function auth(Request $req){
    		$r_username = $req->input('username');
    		$r_password = $req->input('password');
    		$row = admin::where('username','=',$r_username)->where('password','=',$r_password)->get();

    		if(count($row)>0)
    		{
    			Session::put('admin_login_status','true');
    			return redirect('admin_home');
    		}
    		else
    		{
    			return redirect('/admin_login')->with('wp','Incorrect Username/Password');
    		}
    }

    public function logout(){
    	Session::forget('admin_login_status');
    	return redirect('admin_login');
    }

}
