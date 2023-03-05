<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    //

    public function login(){
    return view('User.login');
    }

    public function index(){
        return view('User.dashboard');
    }

    public function Usertest(Request $request){
        if($request->isMethod('post')){
           
            $data= $request->all();
             $validate =  $request->validate([
                'reg' => 'required|max:255',
                'password' =>'required',
            ]);
            
            
            if(Hash::check($data['password'],Auth::user()->password)){
                $user = User::where('regNo',$validate['reg'])->exists();
                if($user){
                    Session::put('examloginsuccess','EXAM LOGIN WAS SUCCESSFUL');
                    return redirect()->route('user.exam');
                }
                else{
                    redirect()->back()->with('err_message','Portal Authentication Failed');
                }
            }
            else{
                   redirect()->back()->with('err_message','Portal Authentication Failed');
            }
    
        }
        return view('User.taketest');
    }

    public function logout(){
        Session::flush();
        Auth::logout();
        return redirect('/');
    }
}
