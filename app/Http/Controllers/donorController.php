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

    public function register(Request $req)
    {
    	$donor = new donor;
    	$donor->fname = $req->input('fname');
    	$donor->lname = $req->input('lname');
    	$donor->address = $req->input('address');
    	$donor->contact = $req->input('contact');
    	$donor->password = $req->input('password');
    	$donor->gender = $req->input('gender');

    	$year = $req->input('year');
    	$month = $req->input('month');
    	switch ($month) {
    		case 'Janaury':
    			$month = '01';
    			break;
    		case 'Febraury':
    			$month = '02';
    			break;
    		case 'March':
    			$month = '03';
    			break;
    		case 'April':
    			$month = '04';
    			break;
    		case 'May':
    			$month = '05';
    			break;
    		case 'June':
    			$month = '06';
    			break;
    		case 'July':
    			$month = '07';
    			break;
    		case 'August':
    			$month = '08';
    			break;
    		case 'September':
    			$month = '09';
    			break;
    		case 'October':
    			$month = '10';
    			break;
    		case 'November':
    			$month = '11';
    			break;
    		case 'December':
    			$month = '12';
    			break;
    	}
    	$day = $req->input('day');
		$date = $year.'-'.$month.'-'.$day;
    	
    	$donor->timestamps = false;
    	$donor->dob = $date;


    	if($donor->save())
    	{
    		return redirect('/suc_register');
    	}
    }
}