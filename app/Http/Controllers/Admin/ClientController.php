<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\User;
use App\Package;
use Carbon\Carbon;
use Spatie\Permission\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use App\Mail\UserMail;
use App\Http\Requests\ClientRequest;
use Session;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $packages=Package::all();
        return view('admin.client.add',compact('packages'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ClientRequest $request)
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
            $password=Str::random(6);
            $option=$request->packages;
            $package=Package::where('package_name',$option)->first();
            $user=new User;
            $user->email=$request->email;
            $user->package_id=$package->id;
            $user->password=Hash::make($password);
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
            $user->save();
            $details=array(
                'email'=>$request->email,
                'password'=>$password,
            );
            Mail::to($request->email)->send(new UserMail($details));
            if($user)
            {
                Session::flash('added','User added Successfully');
                return redirect()->back();
            }

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
