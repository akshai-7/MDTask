<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redis;

class AdminController extends Controller
{
    public function admin(Request $request){

        $user = User::where(['email'=>$request->email])->first();
        if(!$user|| !Hash::check($request->password,$user->password)){
               return   "<script>alert('Email-id or Password is not matched');window.location.href='".('/')."'; </script>";
        }
        if($user->role!= 'admin'){
               return "<script>alert('You Are Not Admin');window.location.href='".('/')."'; </script>";
        }
        return redirect('/index');


    }
    public function create(){
        return view('/index');
    }
    public function userlist(){
        $user= User::all();
        // dd($driver);
        return view('/index',['user'=>$user]);
    }
    public function delete($id){
        $driver=Driver::find($id);
        $driver->delete();
        return redirect('/index');
    }
    public function reportlist($user_id){
        $report = Report::where('user_id',$user_id)->get();
        return view('/index1',['report'=>$report]);

    }
}
