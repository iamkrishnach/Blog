<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Roles;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function addusers($id = null){
        $admin=  session()->get('admin-auth');
        $roles = Roles::orderBy('id','DESC')->get();
      
        $user = User::orderBy('id','DESC')->get();
        $value = null;
        if ($id) {
            $value = User::where('id',$id)->first();
        }

        return view('Backend.UserManagement.User',['admin'=>$admin,'roles'=>$roles,'user'=>$user,'value'=>$value]);
    }

    public function insertusers(Request $request){
        $this->validate($request,[
            'name'=>'required|regex:/^[\pL\s]+$/u|max:255',
            'phone'=>'required|numeric',
            'email'=> 'required|email:rfc,dns,filter',
            'password'=> 'required',
            ]);
    
            $data = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                'phone' => $request->phone,
                'type'=>$request->type,
            ]);
            $data->assignRole($request->type);
            
            return redirect()->back()->with(['success'=>"User {$data->name} inserted successfully"]);
    }
    

    public function updateusers(Request $request,$id){
        $this->validate($request,[
            'name'=>'required|regex:/^[\pL\s]+$/u|max:255',
            'phone'=>'required|numeric',
            'email'=> 'required|email:rfc,dns,filter',
            ]);

        $data = User::where('id',$id)->first();
        $data->name = $request->name;
        $data->phone = $request->phone;
        $data->email = $request->email;
        $data->type = $request->type;
        $data->save();
        $data->assignRole($request->type);
        
        return redirect(url('add-user'))->with(['success'=>"User {$data->name} updated successfully"]);
    }

    public function userdelete($id){
        try {
            $data= User::where('id',$id)->delete();
            return redirect()->back()->with(['error'=>'User Deleted Successfully']); 
            DB::commit();
        } catch (\Throwable $th) {
            DB::rollBack();
            return redirect()->back()->with(['error' => 'OOPS somthings went wrong']); 
        }
    }
}
