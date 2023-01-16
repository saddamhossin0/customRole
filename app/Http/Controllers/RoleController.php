<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
public  function  roleIndex(){
    $roles = Permission::all();
//    dd($roles);
    return view('admin.role.index',compact('roles'));
}

public  function  roleStore(Request $request){
//    dd($request->all());
    $roleData = new  Role();
    $roleData->name = $request->name;
    $roleData->permissions = $request->keywords ? $request->keywords : [];
    $roleData->save();
    return Redirect()->back();
}
}
