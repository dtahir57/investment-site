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
use Session;

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
        $filename=sprintf('image_%s%s.png',random_int(1,10000),random_int(1,10000));
        $image=$request->file('image');
        $destination_path=public_path('/verification');
        $image->move($destination_path,$filename);
        $user->image_name=$filename;
        $user->update();
        $request=new UserRequest;
        $request->users_id=$user->id;
        $request->type='verification';
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

    public function withdraw($id,$address)
    {
        $user=User::find($id);
        $user->wallet_address=$address;
        $user->update();
        $request=new UserRequest;
        $request->users_id=$user->id;
        $request->type='withdraw';
        $request->save();
        if($request)
        {
            Session::flash('withdraw','Withdraw request sent');
            return redirect()->back();
        }
        
    }
}
