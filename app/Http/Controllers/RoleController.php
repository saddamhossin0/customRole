<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
public  function  roleIndex(){
    $roles = Permission::all();
//    dd($role);
    return view('admin.role.index',compact('roles'));
}
}
