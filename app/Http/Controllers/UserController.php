<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\User;
// use http\Client\Curl\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public  function userIndex(){
        $userRoles = Role::all();
//        dd($userRole);
        return view('admin.user.index',compact('userRoles'));
    }
    public  function userStore(Request $request){
//        dd($request->all());

        $permission = Role::where('id',$request->id)->first();
//        dd($permission);
        $user =  new User();
        $user->email = $request->email;
        $user->permissions = json_encode($permission->permissions);

        $user->password =  bcrypt($request->password);
        $user->save();
        return Redirect()->back();

    }
}
