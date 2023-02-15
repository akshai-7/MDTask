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
    public function damagelist($user_id){
        $visual= Visual::with('vehicle')->get();
        dd($visual);
        return view('/damage',['visual'=>$visual]);
    }
    // public function vehiclelist($user_id){
    //     $vehicle = Vehicle::where('user_id',$user_id)->get();
    //     return view('/damage',['vehicle '=>$vehicle ]);
    // }
}
