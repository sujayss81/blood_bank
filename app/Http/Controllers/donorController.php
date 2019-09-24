<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donor;
use Session;

class donorController extends Controller
{
    //
    public function auth(Request $req)
    {
    	$r_username = $req->input('username');
    	$r_password = $req->input('password');
    	$res = donor::where('fname','=',$r_username)->where('password','=',$r_password)->get();
    	if(count($res)>0)
    	{
    		$id = donor::where('fname','=',$r_username)->value('id');
    		Session::put('id',$id);
    		return redirect('donor_home');
    	}
    	else
    	{
    		return redirect('/')->with('status','Incorrect Username/Password');
    	}
    }

    public function donor_home()
    {
    	$id = Session::get('id');
    	$res = donor::where('id','=',$id)->get();
    	return view('donor_home',compact('res'));
    }

    public function logout()
    {
    	Session::forget('id');
    	return redirect('/');
    }
}
