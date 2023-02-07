<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Admin;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function register(Request $request){
        $validator = Validator::make($request->all(),
         [
             'name'=>'required',
             'email'=>'required|email',
             'password'=>'regex:"^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]{8,}$"',
         ]
         );
         if ($validator->fails()){
            return response()->json(['message'=>'Validator error'],401);
        }
        $data = $request->all();
        $data['password']= Hash::make($data['password']);
        $user = User::create($data);

       $response['token']= $user->createToken('token')->plainTextToken;
       return response()->json($response,200);
    }

    public function login(Request $request){

        if(Auth::guard('web')->attempt($request->only(['email','password'])))
        {
            $response['token']= Auth::user()->createToken('token')->plainTextToken;
            return response()->json($response,200);
        }
        if(Auth::guard('webadmin')->attempt($request->only(['email','password'])))
        {
            $response['token']=Auth::guard('webadmin')->user()->createToken('token')->plainTextToken;
            return response()->json($response,200);
        }else{
            return response()->json(['message'=>'Your email or password are incorrect'],401);
        }

    }
    public function driver(Request $request){

        $user =  new Driver();
        $user->drivername=$request['drivername'];
        $user->company=$request['company'];
        $user->delivaryemail=$request['delivaryemail'];
        $user->phone=$request['phone'];
        $user->save();
        return response()->json(['message'=>'Data Stored Successfully'],200);
    }
}
