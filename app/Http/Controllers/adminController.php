<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\admin;
use App\donor;
use App\donation;
use App\donordonation;
use App\bloodtype;
use App\hospital;
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

    public function view_blood(){
        $res = bloodtype::all();
        return view('view_blood',compact('res'));
    }

    public function showDonor($id){
        $res = donor::where('id','=',$id)->get();
        return view('show_donor',compact('res'));
    }

    public function transaction(Request $req){
        $hospital = new hospital;
        $bloodgroup = $req->input('bloodgroup');
        $quantity = $req->input('quantity');
        $bloodtype;
        switch ($bloodgroup) {
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
        $hospital->bt_id = $bloodtype;
        $hospital->b_group = $bloodgroup;
        $hospital->quantity = $quantity;
        $hospital->h_name = $req->input('hospitalname');
        $hospital->o_date = $req->input('date');
        $bt_quantity = bloodtype::where('id','=',$bloodtype)->value('quantity');
        if ($bt_quantity == 0) {
            return redirect('/add_transaction')->with('status','Blood Bank Empty');
        }
        else
        {
            $bt_quantity -= $quantity;
            bloodtype::where('id','=',$bloodtype)->update(['quantity'=>$bt_quantity]);
            if($hospital->save())
            {
                return redirect('/add_transaction')->with('status','Transaction Added');
            }
            else{
                return redirect('/add_transaction')->with('status','Something Went Wrong!!');
            }
        }

    }

      public function view_transaction(){
        $res = hospital::all();
        return view('view_transaction',compact('res'));
    }

}
