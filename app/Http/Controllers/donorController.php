<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\donor;
use App\donordonation;
use App\donation;
use Session;

class donorController extends Controller
{

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
        $bloodtype = $req->input('bloodtype');
        switch ($bloodtype) {
            case 'A+':
                $bloodtype = 1;
                break;
            case 'A-':
                $bloodtype = 2;
                break;
            case 'B+':
                $bloodtype = 3;
                break;
            case 'B-':
                $bloodtype = 4;
                break;
            case 'AB+':
                $bloodtype = 5;
                break;
            case 'AB-':
                $bloodtype = 6;
                break;
            case 'O+':
                $bloodtype = 7;
                break;
            case 'O-':
                $bloodtype = 8;
                break;
        }
        $donordonation = new donordonation;
        $donordonation->bt_id = $bloodtype;
        $donor->bt_id = $bloodtype;
    	if($donor->save() && $donordonation->save())
    	{
    		return redirect('/suc_register');
    	}
    }

    public function donordonation(){
        $id = Session::get('id');
        $res = donor::where('id','=',$id)->get();
        $val = donation::where('donor_id','=',$id)->get();
            return view('donor_donation',compact('val','res'));
    }

    public function donorUpdate(){
        $id = Session::get('id');
        $res = donor::where('id','=',$id)->get();
        return view('donor_update',compact('res'));
    }

    public function updateDonor(Request $req){
        $fname = $req->input('fname');
        $lname = $req->input('lname');
        $contact = $req->input('contact');
        $address = $req->input('address');
        $dob = $req->input('dob');
        $id = Session::get('id');
        $update = donor::where('id','=',$id)->update(["fname"=>$fname,"lname"=>$lname,"contact"=>$contact,"address"=>$address,"dob"=>$dob]);
        if($update){
            return redirect('/donor_home')->with('updateStatus','Update Sucessfull');
        }
    }

    public function cPass(){
        $id = Session::get('id');
        $res = donor::where('id','=',$id)->get();
        return view('c_pass',compact('res'));
    }

    public function changePassword(Request $req){
        $id = Session::get('id');
        $cpass = $req->input('cpass');
        $npass = $req->input('npass');
        $conpass = $req->input('conpass');
        $opass = donor::where('id','=',$id)->value('password');
        if($cpass == $opass){
            if($npass == $conpass){
                if($opass != $npass){
                    $update = donor::where('id','=',$id)->update(['password'=>$npass]);
                    if($update){
                        return redirect('/donor_home')->with('updateStatus','Password Changed');
                    }
                }
                else if($npass == $conpass){
                    return redirect('c_pass')->with('status','That was Your Current Password!!');
                }
                else{
                    return redirect('c_pass')->with('status','Something Went Wrong!!Try Again');
                }
            }
            else{
                return redirect('/c_pass')->with('status','Passwords Dont Match');
            }
        }
        else
        {
            return redirect('/c_pass')->with('status','Incorrect Password');
        }
    }

    public function rules(){
        $id = Session::get('id');
        $res = donor::where('id','=',$id)->get();
        return view('rules',compact('res'));
    }
}
