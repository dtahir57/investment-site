<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserprofileRequest;
use App\User;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
use App\Mail\AdminMail;
use App\UserRequest;
use Auth;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
         $this->middleware(['auth','verified']);
    }

    public function index()
    {
        $date=Carbon::now()->format('Y-m-d');
        $user=Auth::user();
        return view('Frontend.home',compact('user','date'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function profile()
    {
        $user = Auth::user();
        return view('Frontend.user.index', compact('user'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserprofileRequest $request, $id)
    {

        $user=User::find($id);
        $filename=sprintf('image_%s.png',random_int(1,10000));
        $request->file('image')->storeAs($user->name,$filename,'public');
        $user->image_name=$filename;
        $user->save();
        $request=new UserRequest;
        $request->users_id=$user->id;
        $request->save();
        if($request)
        {
            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function withdraw($id)
    {
        $admin=User::Role('Super_User')->first()->email;
        $user=User::find($id);
        $details=array(
            'name'=>$user->name,
            'email'=>$user->email,
            'package'=>$user->package->package_name,
            'invested_amount'=>$user->invested_amount,
        );
        Mail::to($admin)->send(new AdminMail($details));
        Session::flash('sent','Withdraw request sent');
    }
}
