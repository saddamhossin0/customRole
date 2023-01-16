<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function permissionIndex(){
return view('admin.permission.index');
    }

    public function permissionStore(Request $request){
// dd($request->all());
       $create="";
       $read="";
       $update="";
       $delete ="";
        $permission = new Permission();
        $permission->attribute = $request->attribute;

        for($i = 0 ; $i<count($request->keywords);$i++){
//            dd($request->keywords[$i]);

          if($request->keywords[$i] == 'create'){
              $data['create'] = $request->attribute.'_'.$request->keywords[$i];
         } else if($request->keywords[$i] == 'read'){
              $data['read'] = $request->attribute.'_'.$request->keywords[$i];
         }else if($request->keywords[$i] == 'delete'){
              $data['delete'] = $request->attribute.'_'.$request->keywords[$i];
          }else if($request->keywords[$i] == 'update'){
              $data['update'] = $request->attribute.'_'.$request->keywords[$i];
          }
        }

//        $data = [
//            'read' => $read,
//            'create' => $create,
//            'delete' => $delete,
//            'update' => $update,
//        ];
        $permission->keywords = json_encode($data);
        $permission->save();
        return Redirect()->back();
    }

}
