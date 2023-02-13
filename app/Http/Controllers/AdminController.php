<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function admin(Request $request){

        $user = User::where(['email'=>'admin@gmail.com'])->first();
        if(!$user|| !Hash::check($request->password,$user->password)){
                echo  "<script>alert('Email-id or Password is not matched');window.location.href='".('/')."'; </script>";
        }else{

            return redirect('/index');
        }
    }
    public function create(){
        return view('/index');
    }
}
