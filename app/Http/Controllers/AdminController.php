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
    //user
        public function create(){
            return view('/user');
        }
        public function userlist(){
            $user= User::all();
            return view('/user',['user'=>$user]);
        }
        public function newuser(){
            return view('/createuser');
        }
        public function createuser(Request $request){
            $validator = Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required',
            ]);
            if ($validator->fails()){
                return response()->json(['message'=>'Validator error']);
            }else{
            $user = new User();
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->password=Hash::make($request['password']);
            $user->save();
            return redirect('/user');
            }
        }
        public function updateuser($id){
            $user=User::where('id',$id)->get();
            return view('/updateuser',['user'=>$user]);
        }
        public function updateuserdetails(Request $request,$id){
            $validator = Validator::make($request->all(),[
                'name'=>'required',
                'email'=>'required',
                'role'=>'required',
                'date'=>'required',
            ]);
            if ($validator->fails()){
                return response()->json(['message'=>'Validator error']);
            }
            $id= $request->id;
                $data1=User::find($id);
                if ($data1==null){
                    return response()->json(['message'=>'Invalid Id']);
                }
            $user= User::where('id',$id)->first();
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->role=$request['role'];
            $user->created_at=$request['date'];
            $user->save();
            return redirect('/user');
        }
        public function delete($id){
            User::find($id)->delete();
            return redirect('/user');
        }
    //user
        public function driverlist($user_id){
            $driver = Driver::with('report')->where('user_id',$user_id)->get();
            return view('/driver',['driver'=>$driver]);
        }
        public function newdriver($id){
            return view('/createdriver',compact('id'));
        }
        public function store(Request $request){
            $validator = Validator::make($request->all(),[
                'drivername'=>'required',
                'company'=>'required',
                'deliveryemail'=>'required',
                'phone'=>'required',
                'date_of_incident'=>'required',
                'location'=>'required',
                'witnessed_by'=>'required',
                'phone_number_of_witness'=>'required',
                'brief_statement'=>'required',
                'upload_image'=>'required',
                'report'=>'required',
                'date'=>'required',
                'number_plate'=>'required',
                'mileage'=>'required',
                'view'=>'required',
                'image'=>'required',
                'feedback'=>'required',
                'action'=>'required'
            ]);
            if ($validator->fails()){
                return response()->json(['message'=>'Validator error'],401);
            }else{
            $user_id=Auth::id();
            $data = new Driver();
            $data->user_id =1;
            $data->drivername=$request['drivername'];
            $data->company=$request['company'];
            $data->deliveryemail=$request['deliveryemail'];
            $data->phone=$request['phone'];
            $data->save();

            $user = new Report();
            $user->user_id=1;
            $user->date_of_incident =$request['date_of_incident'];
            $user->location =$request['location'];
            $user->witnessed_by =$request['witnessed_by'];
            $user->phone_number_of_witness =$request['phone_number_of_witness'];
            $user->brief_statement =$request['brief_statement'];
            $user->upload_image =$request['upload_image'];
                if($request->hasfile('upload_image')){
                    $upload_image =$request->file('upload_image');
                    $filename = time().'.'.$upload_image->getClientOriginalExtension();
                    $location = public_path('images'.$filename);
                    Report::make($upload_image)->resize(300, 300)->save($location);
                }
            $user->report =$request['report'];
            $user->date =$request['date'];
            $user->number_plate =$request['number_plate'];
            $user->mileage=$request['mileage'];
            $user->save();

            $data= $request->all();
            $user_id=$request->user_id;
            foreach($data['view'] as $row =>$value){
                $data1=array(
                'user_id'=>$request->user_id,
                'view'=>$data['view'][$row],
                'image'=> $data['image'][$row],
                'feedback'=>$data['feedback'][$row],
                'notes'=> $data['notes'][$row],
                'action'=> $data['action'][$row],
                );
                Visual::create($data1);
                }

            $data2= $request->all();
            foreach($data2['view'] as $key =>$value){
                $data3=array(
                'user_id'=>$request->user_id,
                'view'=>$data2['view1'][$key],
                'image'=> $data2['image1'][$key],
                'feedback'=>$data2['feedback1'][$key],
                'notes'=> $data2['notes1'][$key],
                'action'=> $data2['action1'][$key],
                );
                Vehicle::create($data3);
                }

            $data4= $request->all();
            foreach($data4['view'] as $list =>$value){
                $data5=array(
                'user_id'=>$request->user_id,
                'view'=>$data4['view2'][$list],
                'image'=> $data4['image2'][$list],
                'feedback'=>$data4['feedback2'][$list],
                'notes'=> $data4['notes2'][$list],
                'action'=> $data4['action2'][$list],
                );
                Cabin::create($data5);
                }
            return redirect('/driver/'.$user_id);
            }
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
//check;
        public function check($user_id){
            $visual= Visual::where('user_id',$user_id)->get();
            $vehicle = Vehicle::where('user_id',$user_id)->get();
            $cabin= Cabin::where('user_id',$user_id)->get();
            return view('/details',['cabin'=>$cabin,'visual'=>$visual,'vehicle'=>$vehicle]);
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
                return response()->json(['message'=>'Validator error']);
            }
            $user_id= $request->user_id;
                $data1=User::find($user_id);
                if ($data1==null){
                    return response()->json(['message'=>'Invalid Id']);
                }
            $data2=$request->id;
                $data3=Visual::find($data2);
                if ($data3==null){
                    return response()->json(['message'=>'Invalid Id']);
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
        public function deletevisual($id){
            $user= Visual::find($id);
            $user->delete();
            $data=$user->user_id;
            return redirect('/details/'.$data);
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
                        $location = public_path('images'.$time);
                        Vehicle::make($image)->resize(300, 300)->save($location);
                    }
            $vehicle->feedback=$request['feedback'];
            $vehicle->save();
            return redirect('/details/'.$data1->id);
        }
        public function deletevehicle($id){
            $user=Vehicle::find($id);
            $user->delete();
            $user1=$user->user_id;
            return redirect('/details/'.$user1);
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
        public function deletecabin($id){
            $data=Cabin::find($id);
            $data->delete($id);
            $data1=$data->user_id;
            return redirect('/details/'.$data1);
        }
        public function allrentallist(){
            $driver = Driver::with('report')->get();
            return view('/allrentallist',['driver'=>$driver ]);
            dd($driver);
        }
}
