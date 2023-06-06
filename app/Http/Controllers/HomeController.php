<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){
        $role=Auth::user()->role;
        if($role=='1'){
            $user = User::get();
            return view('admin',compact('user'));
            
        }elseif($role=='2'){
            
            return view('user');
        }
        else{
            return view('customer');
        }

    }

    public function adduser(Request $request){
        $data=new user;

        $data->name=$request->name;
        $data->email=$request->email;
        $data->password=bcrypt($request->password);
        $data->role='2';
        $data->save();
        return redirect()->back();
    }
    
}
