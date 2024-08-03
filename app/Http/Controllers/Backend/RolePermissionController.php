<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Permission;
use App\Models\Roles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RolePermissionController extends Controller
{
    public function permission_view($id = null)
    {
        $admin =  session()->get('admin-auth');
        $data = Permission::get();
        $value = null;
        if ($id) {
            $value = Permission::where('id',$id)->first();
        }

        return view('Backend.RolePermission.Permission', ['admin' => $admin,'data'=>$data,'value'=>$value]);
    }

    public function permission_save(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = Permission::create([
            'name' => $request->name
        ]);
        return redirect()->back()->with(['success' => 'permission added successfully']);
    }

    public function role_view($id = null)
    {
        $admin =  session()->get('admin-auth');
        $data = Roles::get();
       
        $permission = Permission::get();
        $selectpermission = [];
        $value = null;
        if ($id) {
            $selectpermission = DB::table('role_has_permissions')->where('role_id', $id)->get()->pluck('permission_id')->toArray();
            //dd($selectpermission);
            $value = Roles::where('id',$id)->first();
        }

        return view('Backend.RolePermission.Roles', ['admin' => $admin,'data'=>$data,'permission'=>$permission,'value'=>$value,'selectpermission'=>$selectpermission]);
    }

    public function role_save(Request $request)
    {
        
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = Roles::create([
            'name' => $request->name
        ]);
        
        $data->syncPermissions($request->permission_data);
        return redirect()->back()->with(['success' => 'Role added successfully']);
    }

    public function role_update(Request $request,$id)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        $data = Roles::find($id);
        $data->name = $request->name;
        $data->save();
        $data->syncPermissions($request->permission_data);
        return redirect(url('role'))->with(['success' => 'Role updated successfully']);
    }
}
