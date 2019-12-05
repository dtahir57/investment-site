<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\UserRequest;
use Spatie\Permission\Models\Role;
use App\User;
use Session;
use Illuminate\Http\Request;

class UserRequestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $requests=UserRequest::all();
        return view('admin.request.index',compact('requests'));
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
     * @param  \App\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function show(UserRequest $userRequest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function edit(UserRequest $userRequest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserRequest $userRequest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\UserRequest  $userRequest
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request=UserRequest::find($id)->delete();
        if($request)
        {
            Session::flash('deleted','Request Deleted Successfully');
            return redirect()->route('request.index');
        }
    }

    public function accept($id)
    {
        $user=User::find($id);
        $user->assignRole('Verified_User');
        $request=UserRequest::where('users_id',$id)->delete();
        if($user)
        {
            Session::flash('accepted','Request Accepted');
            return redirect()->route('request.index');
        }
    }
}

