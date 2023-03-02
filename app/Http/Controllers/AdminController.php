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
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;
use Illuminate\Notifications\Notification;
use App\Notifications\sendEmailnotification;

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
            $user1= User::count();
            return view('/user',['user'=>$user],['user1'=>$user1]);
        }
        public function newuser(){
            $user= User::count();
            return view('/createuser',['user'=>$user]);
        }
        public function createuser(Request $request){
            $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'password'=>'required|min:8',
            ]);
            $user = new User();
            $user->name=$request['name'];
            $user->email=$request['email'];
            $user->password=Hash::make($request['password']);
            $user->save();
            session()->flash('message',' User is Created');
            return redirect('/user');
        }
        public function updateuser($id){
            $user=User::where('id',$id)->get();
            return view('/updateuser',['user'=>$user]);
        }
        public function updateuserdetails(Request $request,$id){
           $request->validate([
                'name'=>'required',
                'email'=>'required|email',
                'role'=>'required',
                'date'=>'required',
            ]);
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
            session()->flash('message',' Updated Successfully');
            return redirect('/user');
        }
        public function delete($id){
            User::find($id)->delete();
            session()->flash('message1',' User is Deleted');
            return redirect('/user');
        }
    //user
        public function driverlist($user_id){
            $driver = Driver::where('user_id',$user_id)->get();
            return view('/driver',['driver'=>$driver]);
        }
        public function newdriver($id){
            return view('/createdriver',compact('id'));
        }
        public function store(Request $request){
            $validator = Validator::make($request->all(),[
                // 'drivername'=>'required',
                // 'company'=>'required',
                // 'deliveryemail'=>'required|email',
                // 'phone'=>'required|min:10',
                // 'date_of_incident'=>'required',
                // 'location'=>'required',
                // 'witnessed_by'=>'required',
                // 'phone_number_of_witness'=>'required|min:10',
                // 'brief_statement'=>'required',
                // 'upload_image'=>'required',
                // 'report'=>'required',
                // 'date'=>'required',
                // 'number_plate'=>'required',
                // 'mileage'=>'required',
                // 'view'=>'required',
                // 'image'=>'required',
                // 'feedback'=>'required',
                // 'action'=>'required',
                // 'notes'=>'required',
                // 'view1'=>'required',
                // 'image1'=>'required',
                // 'feedback1'=>'required',
                // 'action1'=>'required',
                // 'notes1'=>'required',
                // 'view2'=>'required',
                // 'image2'=>'required',
                // 'feedback2'=>'required',
                // 'action2'=>'required',
                // 'notes2'=>'required',
            ]);
            if ($validator->fails()){
                return response()->json(['message'=>'Validator error'],401);
            }else{
            $user_id=$request['user_id'];
            $data = new Driver();
            $data->user_id =$user_id;
            $data->drivername=$request['drivername'];
            $data->company=$request['company'];
            $data->deliveryemail=$request['deliveryemail'];
            $data->phone=$request['phone'];
            $data->report =$request['report'];
            $data->date =$request['date'];
            $data->number_plate =$request['number_plate'];
            $data->mileage=$request['mileage'];
            $data->save();

            // $user = new Report();
            // $user->user_id=$user_id;
            // $user->date_of_incident =$request['date_of_incident'];
            // $user->location =$request['location'];
            // $user->witnessed_by =$request['witnessed_by'];
            // $user->phone_number_of_witness =$request['phone_number_of_witness'];
            // $user->brief_statement =$request['brief_statement'];
            // $user->upload_image =$request['upload_image'];
            // if($request->hasfile('upload_image')){
            //     $image = $request->file('upload_image');
            //     $name = $image->getClientOriginalName();
            //     $location=public_path($name);
            //     $user->image =$name;
            // }
            // $user->report =$request['report'];
            // $user->date =$request['date'];
            // $user->number_plate =$request['number_plate'];
            // $user->mileage=$request['mileage'];
            // $user->save();

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
            $driver1=$driver->user_id;
            return redirect('/driver/'.$driver1);
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
            $request->validate([
                'view'=>'required',
                'image'=>'required',
                'feedback'=>'required',
                'action'=>'required',
            ]);
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
                            $image = $request->file('image');
                            $name = $image->getClientOriginalName();
                            $location=public_path($name);
                            $visual->image =$name;
                        }
            $visual->feedback=$request['feedback'];
            $visual->action=$request['action'];
            $visual->save();
            session()->flash('message',' Updated Successfully');
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
            $request->validate([
                'view'=>'required',
                'image'=>'required',
                'feedback'=>'required',
                'action'=>'required',
            ]);
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
                    $image = $request->file('image');
                    $name = $image->getClientOriginalName();
                    $location=public_path($name);
                    $vehicle->image =$name;
                }
            $vehicle->feedback=$request['feedback'];
            $vehicle->action=$request['action'];
            $vehicle->save();
            session()->flash('message',' Updated Successfully');
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
            $request->validate([
                'view'=>'required',
                'image'=>'required',
                'feedback'=>'required',
                'action'=>'required',
            ]);
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
                    $image = $request->file('image');
                    $name = $image->getClientOriginalName();
                    $location=public_path($name);
                    $cabin->image =$name;
                }
            $cabin->feedback=$request['feedback'];
            $cabin->action=$request['action'];
            $cabin->save();
            session()->flash('message',' Updated Successfully');
            return redirect('/details/'.$data1->id);
        }
        public function deletecabin($id){
            $data=Cabin::find($id);
            $data->delete($id);
            $data1=$data->user_id;
            return redirect('/details/'.$data1);
        }
        public function allrentallist(){
            $driver = Driver::all();
            return view('/allrentallist',['driver'=>$driver ]);

        }
        public function summary($user_id){
            $visual= Visual::where('user_id',$user_id)->get();
            $vehicle = Vehicle::where('user_id',$user_id)->get();
            $cabin= Cabin::where('user_id',$user_id)->get();
            return view('/summary',['cabin'=>$cabin,'visual'=>$visual,'vehicle'=>$vehicle]);
        }
        public function pdf($user_id){
            $visual= Visual::where('user_id',$user_id)->get();
            $vehicle = Vehicle::where('user_id',$user_id)->get();
            $cabin= Cabin::where('user_id',$user_id)->get();
            $pdf = Pdf::loadView('pdf.userpdf',['cabin'=>$cabin,'visual'=>$visual,'vehicle'=>$vehicle]);
            return $pdf->download('userpdf.pdf');
        }
        public function edit($user_id){
            return redirect('/details/'.$user_id);
        }

}
