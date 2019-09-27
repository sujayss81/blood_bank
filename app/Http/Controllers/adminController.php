<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\donor;
use App\donation;
use App\donordonation;
use App\bloodtype;
use Session;
use Carbon\Carbon;

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
    			return redirect('/admin_login')->with('status','Incorrect Username/Password');
    		}
    }

    public function logout(){
    	Session::forget('admin_login_status');
    	return redirect('admin_login');
    }

    public function manage(){
        $res = donor::all();
        return view('manage_donor',compact('res'));
    }

    public function delete($id){
        donor::where('id','=',$id)->delete();
        donordonation::where('d_id','=',$id)->delete();
        $status = "Donor ID ".$id." Deleted";
        return redirect('manage_donor')->with('status',$status);
    }

    public function addDonation(Request $req){
        $donation = new donation;
        $d_id = $req->input('donorid');
        $donation->donor_id = $d_id;
        $bloodtype = donor::where('id','=',$d_id)->value('bt_id');
        $bloodgroup = bloodtype::where('id','=',$bloodtype)->value('b_group');
        $donation->b_group = $bloodgroup;
        $donation->bt_id = $bloodtype;
        $qty = $req->input('quantity');
        $donation->quantity = $qty;
        $raw = bloodtype::where('id','=',$bloodtype)->value('quantity');
        $raw += $qty;
        bloodtype::where('id','=',$bloodtype)->update(['quantity'=>$raw]);
        $cur_date = Carbon::now();
        $cur_date = $cur_date->toDateString();
        $donation->d_date = $cur_date;
        $d_quantity = donordonation::where('d_id','=',$d_id)->value('quantity');
        $d_quantity += $qty;
        donordonation::where('d_id','=',$d_id)->update(['quantity'=>$d_quantity]);
        if($donation->save()){
            $status = "Donor ".$d_id." donated ".$qty."ml of ".$bloodgroup." Blood";
            return redirect('/add_donation')->with('status',$status);
        }
        else
        {
            return redirect('/add_donation')->with('status','Something Went Wrong!! Please Try Again');
        }

    }

    public function view_donation(){
        $res = donation::all();
        return view('view_donation',compact('res'));
    }
}
