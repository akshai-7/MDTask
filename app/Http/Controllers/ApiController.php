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

       $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'password'=>'required',
       ]);

       $user = new User();
       $user->name=$request['name'];
       $user->email=$request['email'];
       $user->password=Hash::make($request['password']);
       $user->save();
       $response['token']= $user->createToken('token')->plainTextToken;
       return response()->json($response,200);
    }

    public function login(Request $request){

        if(Auth::attempt($request->only(['email','password'])))
        {
            $response['token']= Auth::user()->createToken('token')->plainTextToken;
            return response()->json($response,200);
        }else{
            return response()->json(['message'=>'Invalid Email and Password'],401);
        }
    }

    public function getdetails(){

        return response()->json(['success' => Auth::user()]);
    }

    public function update(Request $request){

        $request->validate([
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required',
           ]);

            $user=User::find(Auth::id());
            $user->name =$request['name'];
            $user->email=$request['email'];
            $user->password=Hash::make($request['password']);
            $user->save();
            return response()->json(['message'=>'Update Successfully'],200);
    }

   public function delete(){
            $user=User::find(Auth::user()->id);
            $user->delete();
            return response()->json(['message'=>'Deleted'],200);
    }

    //Driver details;
    public function driver(Request $request){

        $request->validate([
            'drivername'=>'required',
            'company'=>'required',
            'delivaryemail'=>'required|email',
            'phone'=>'required|max:10',
           ]);

        $data = new Driver();
        // $data->userid = $request['userid'];
         $data->userid =Auth::user()->id;
        $data->drivername=$request['drivername'];
        $data->company=$request['company'];
        $data->deliveryemail=$request['delivaryemail'];
        $data->phone=$request['phone'];
        $data->save();
        return response()->json(['message'=>'Data Stored Successfully'],200);
    }

    public function driverdetails(){


        $data=Driver::find(Auth::user()->id);
        return response()->json($data);
    }

    public function updatedetails(Request $request){

        $request->validate([
            'drivername'=>'required',
            'company'=>'required',
            'delivaryemail'=>'required|email',
            'phone'=>'required|max:10',
           ]);

        $data = Driver::find(Auth::user()->id);
        $data->userid =Auth::user()->id;
        $data->drivername=$request['drivername'];
        $data->company=$request['company'];
        $data->deliveryemail=$request['delivaryemail'];
        $data->phone=$request['phone'];
        $data->save();
        return response()->json(['message'=>'Data Updated Successfully'],200);
    }

    public function deletedetails(){
        $data= Driver::find(Auth::user()->id);
        $data->delete();
        return response()->json(['message'=>'Deleted'],200);
}
}
