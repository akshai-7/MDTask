<?php

namespace App\Http\Controllers;

use App\Models\Driver;
use App\Models\User;
use App\Models\Report;
use App\Models\Visual;
use App\Models\Vehicle;
use App\Models\Cabin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;

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
        return view('/index',['user'=>$user]);
    }
    public function delete($id){
        $driver=User::find($id);
        $driver->delete();
        return redirect('/index');
    }
    public function driverlist($user_id){
        $driver = Driver::where('user_id',$user_id)->get();
        return view('/index1',['driver'=>$driver]);
    }
    public function remove($id){
        $driver=Driver::find($id);
        $driver->delete();
        return view('/index1');
    }
    public function reportlist($user_id){
        $report = Report::where('user_id',$user_id)->get();
        return view('/report',['report'=>$report]);
    }
    public function removereport($id){
        $driver=Report::find($id);
        $driver->delete();
        return view('/report');
    }
    public function visualcheck($user_id){
        $visual= Visual::where('user_id',$user_id)->get();
        // dd($visual);
        return view('/visualcheck',['visual'=>$visual]);
    }
    public function vehiclecheck($user_id){
        $vehicle = Vehicle::where('user_id',$user_id)->get();
        // dd($vehicle);
        return view('/vehiclecheck',['vehicle'=>$vehicle ]);
    }
    public function cabincheck($user_id){
        $cabin= Cabin::where('user_id',$user_id)->get();
        // dd($vehicle);
        return view('/cabincheck',['cabin'=>$cabin ]);
    }
    public function check($user_id){
        $visual= Visual::where('user_id',$user_id)->get();
        $vehicle = Vehicle::where('user_id',$user_id)->get();
        $cabin= Cabin::where('user_id',$user_id)->get();
        return view('/details',['cabin'=>$cabin,'visual'=>$visual,'vehicle'=>$vehicle]);
    }

    public function updatevehiclecheck($id){
        $vehicle = Vehicle::where('id',$id)->get();
        return view('/updatevehiclecheck',['vehicle'=>$vehicle ]);
    }
       public function store(Request $request){

                $validator = Validator::make($request->all(),[
                    // 'id'=>'required',
                    'user_id'=>'required',
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                $user_id=$request->user_id;
                $vehicle= Vehicle::where('user_id',$user_id)->first();
                $vehicle->id =$request['id'];
                $vehicle->user_id =$request['user_id'];
                $vehicle->view=$request['view'];
                $vehicle->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('public/images'.$time);
                            Vehicle::make($image)->resize(300, 300)->save($location);
                        }
                $vehicle->feedback=$request['feedback'];
                $vehicle->save();
                return redirect('/details/{user_id}');
            }


}
