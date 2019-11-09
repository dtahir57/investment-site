<?php

namespace App\Http\Controllers\UserManagement;
use App\Http\Controllers\Controller;
use App\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware(['role:Super_User']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('admin.UserManagement.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles=Role::all();
        return view('admin.UserManagement.user.create',compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    {
        
        $users=new User;
        $users->name = $request->name;
        $users->email =  $request->email;
        $users->username= $request->username;
        $users->phone= $request->phone;
        $users->password = Hash::make($request->password);
       
        $users->save();
        foreach($request->roles as $role)
        {
            $users->assignRole($role);
        }
        if($users)
        {
            Session::flash('created','User Created Successfully');
            return redirect()->route('user.index');
        }
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
        $user=User::find($id);
        $roles=Role::all();
        return view('admin.UserManagement.user.edit',compact('user','roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $users=User::find($id);
        $users->name = $request->name;
        $users->email =  $request->email;
        $users->username= $request->username;
        $users->phone= $request->phone;
        $users->update();
        $users->syncRoles($request->roles);
        
        if($users)
        {
            Session::flash('updated','User Updated Successfully');
            return redirect()->route('user.index');
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
        $user=User::find($id);
        $user->delete();
        if($user)
        {
            Session::flash('deleted','User Deleted Successfully');
            return redirect()->route('user.index');
        }
    }
}
