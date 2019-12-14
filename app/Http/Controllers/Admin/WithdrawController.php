<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\UserRequest;
use App\User;
use Session;
use Illuminate\Http\Request;

class WithdrawController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests=UserRequest::where('type','withdraw')->get();
        return view('admin.withdraw.index',compact('requests'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
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

    public function accept($id)
    {
        $request=UserRequest::find($id);
        $user_id=$request->users_id;
        $user=User::find($user_id);
        $user->wallet_address=null;
        $user->package_id=null;
        $user->invested_amount=null;
        $user->package_started_at=null;
        $user->withdraw_date=null;
        $user->update();
        $request->delete();
        if($request)
        {
            Session::flash('accepted','Request Accepted');
            return redirect()->route('withdraw.index');
        }
    }
}
