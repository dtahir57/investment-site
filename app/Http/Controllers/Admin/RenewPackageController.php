<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use App\Package;
use App\Http\Requests\RenewRequest;
use App\Mail\RenewMail;
use Illuminate\Support\Facades\Mail;
use Carbon\Carbon;
use Session;
use Illuminate\Http\Request;

class RenewPackageController extends Controller
{
    public function index()
    {
        $users=User::where('package_id',null)->where('id','!=',1)->get();
        $packages=Package::all();
        return view('admin.renew.index',compact('users','packages'));
    }
    
    public function update(RenewRequest $request,$id)
    {
        if($request->packages == null)
        {
            Session::flash('package','Must select one package');
            return redirect()->back();
        }
        elseif(sizeof($request->packages) > 1)
        {
            Session::flash('package','You can select one package only');
            return redirect()->back();
        }
        else
        {
            $option=$request->packages;
            $package=Package::where('package_name',$option)->first();
            $user=User::find($id);
            $user->package_id=$package->id;
            $user->invested_amount=$request->amount;
            $started_at=Carbon::now();
            $user->package_started_at=$started_at;
            if($package->wait_time == "30 days")
            {
            $withdraw_date=Carbon::now()->addDays(30);
            $user->withdraw_date=$withdraw_date;
            }
            else if($package->wait_time == "10 days")
            {
            $withdraw_date=Carbon::now()->addDays(10);
            $user->withdraw_date=$withdraw_date;
            }
            else{}
            $user->update();
            $email=$request->email;
            Mail::to($email)->send(new RenewMail($user->name));
            if($user)
            {
                Session::flash('renew','Package Renewed Successfully');
                return redirect()->back();
            }

        }
    }
}
