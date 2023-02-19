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
            return redirect('/user');
        }
        public function create(){
            return view('/user');
        }
        public function userlist(){
            $user= User::all();
            return view('/user',['user'=>$user]);
        }
        public function delete($id){
            $driver=User::find($id);
            $driver->delete();
            return redirect('/user');
        }
        public function driverlist($user_id){
            $driver = Driver::with('report')->where('user_id',$user_id)->get();
            return view('/driver',['driver'=>$driver]);
        }
        public function remove($id){
            $driver=Driver::find($id);
            $driver->delete();
            return view('/driver');
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
        public function vehicleupdate(Request $request,$user_id){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                $user_id= $request->user_id;
                    $data1=User::find($user_id);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data2=$request->id;
                    $data3=Vehicle::find($data2);
                    if ($data3==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $vehicle= Vehicle::where('user_id',$data1->id)->where('id',$data3->id)->first();
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
                return redirect('/details/'.$data1->id);
        }
        public function updatevisualcheck($id){
                $visual = Visual::where('id',$id)->get();
                return view('/updatevisualcheck',['visual'=>$visual ]);
        }
        public function visualupdate(Request $request,$user_id){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                $user_id= $request->user_id;
                    $data1=User::find($user_id);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data2=$request->id;
                    $data3=Visual::find($data2);
                    if ($data3==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $visual= Visual::where('user_id',$data1->id)->where('id',$data3->id)->first();
                $visual->view=$request['view'];
                $visual->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('public/images'.$time);
                            Vehicle::make($image)->resize(300, 300)->save($location);
                        }
                $visual->feedback=$request['feedback'];
                $visual->save();
                return redirect('/details/'.$data1->id);
        }
        public function updatecabincheck($id){
                $cabin = Cabin::where('id',$id)->get();
                return view('/updatecabincheck',['cabin'=>$cabin ]);
        }
        public function cabinupdate(Request $request,$user_id){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                $user_id= $request->user_id;
                    $data1=User::find($user_id);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data2=$request->id;
                    $data3=Cabin::find($data2);
                    if ($data3==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $cabin= Cabin::where('user_id',$data1->id)->where('id',$data3->id)->first();
                $cabin->view=$request['view'];
                $cabin->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('public/images'.$time);
                            Vehicle::make($image)->resize(300, 300)->save($location);
                        }
                $cabin->feedback=$request['feedback'];
                $cabin->save();
                return redirect('/details/'.$data1->id);
            }
            public function newuser(){
                return view('/createuser');
            }

            public function createuser(Request $request){
                return view('/createdriver');
                $validator = Validator::make($request->all(),[
                    'name'=>'required',
                    'email'=>'required|email',
                    'password'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }else{
                $user = new User();
                $user->name=$request['name'];
                $user->email=$request['email'];
                $user->password=Hash::make($request['password']);
                $user->save();
                return redirect('/user');
                }
            }
            public function newdriver(){

                return view('/createdriver');
            }
            public function store(Request $request){
                // dd($request);
                $validator = Validator::make($request->all(),[
                    // 'drivername'=>'required',
                    // 'company'=>'required',
                    // 'deliveryemail'=>'required|email',
                    // 'phone'=>'required',
                    // 'date_of_incident'=>'required',
                    // 'location'=>'required',
                    // 'witnessed_by'=>'required',
                    // 'phone_number_of_witness'=>'required',
                    // 'brief_statement'=>'required',
                    // 'upload_image'=>'required',
                    // 'report'=>'required',
                    // 'date'=>'required',
                    // 'number_plate'=>'required',
                    // 'mileage'=>'required',
                    // 'view'=>'required',
                    // 'image'=>'required',
                    // 'feedback'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }else{
                $user_id=Auth::id();
                dd($user_id);
                $data = new Driver();
                $data->user_id =$user_id;
                $data->drivername=$request['drivername'];
                $data->company=$request['company'];
                $data->deliveryemail=$request['deliveryemail'];
                $data->phone=$request['phone'];
                $data->save();

                $user = new Report();
                $user->user_id=Auth::user()->id;
                $user->date_of_incident =$request['date_of_incident'];
                $user->location =$request['location'];
                $user->witnessed_by =$request['witnessed_by'];
                $user->phone_number_of_witness =$request['phone_number_of_witness'];
                $user->brief_statement =$request['brief_statement'];
                $user->upload_image =$request['upload_image'];
                    if($request->hasfile('upload_image')){
                        $upload_image =$request->file('upload_image');
                        $filename = time().'.'.$upload_image->getClientOriginalExtension();
                        $location = public_path('public/images'.$filename);
                        Report::make($upload_image)->resize(300, 300)->save($location);
                    }
                $user->report =$request['report'];
                $user->date =$request['date'];
                $user->number_plate =$request['number_plate'];
                $user->mileage=$request['mileage'];
                $user->save();

                $data = new Visual();
                $data->user_id =Auth::user()->id;
                $data->view=$request['view'];
                $data->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location=public_path('public/images'.$time);
                            Visual::make($image)->resize(300, 300)->save($location);
                        }
                $data->feedback=$request['feedback'];
                $data->action=$request['action'];
                $data->save();

                $user = new Vehicle();
                $user->user_id =Auth::user()->id;
                $user->view=$request['view'];
                $user->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('public/images'.$time);
                            Vehicle::make($image)->resize(300, 300)->save($location);
                        }
                $user->feedback=$request['feedback'];
                $user->action=$request['action'];
                $user->notes=$request['notes'];
                $user->save();

                $data = new Cabin();
                $data->user_id=Auth::user()->id;
                $data->view=$request['view'];
                $data->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('public/images'.$time);
                            Cabin::make($image)->resize(300, 300)->save($location);
                        }
                $data->feedback=$request['feedback'];
                $data->action=$request['action'];
                $data->notes=$request['notes'];
                $data->save();

                return view('/createdriver');
                }
            }
}
