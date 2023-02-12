<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Driver;
use App\Models\Report;
use App\Models\Visual;
use App\Models\Vehicle;
use App\Models\Cabin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //user datails
        //Request:
            public function register(Request $request){
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
                // $response['token']= $user->createToken('token')->plainTextToken;
                return response()->json(['success'=>true,'data'=>$user],200);
                }
            }

        //login:
            public function login(Request $request){
                if(Auth::attempt($request->only(['email','password'])))
                {
                    $response['token']= Auth::user()->createToken('token')->plainTextToken;
                    return response()->json($response,200);
                }else{
                    return response()->json(['message'=>'Invalid Email and Password'],401);
                }
            }

        //details:
            public function getdetails(){
                return response()->json(Auth::user());
            }

        //update:
            public function update(Request $request){
                $validator = Validator::make($request->all(),[
                    'name'=>'required',
                    'email'=>'required|email',
                    'password'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }else{
                    $user=User::find(Auth::id());
                    $user->name =$request['name'];
                    $user->email=$request['email'];
                    $user->password=Hash::make($request['password']);
                    $user->save();
                    return response()->json(['message'=>'Update Successfully'],200);
                }
            }

        //delete
            public function delete(){
                    $user=User::find(Auth::user()->id);
                    $user->delete();
                    return response()->json(['message'=>'Deleted'],200);
            }

    //driver details;
            public function driver(Request $request){
                $validator = Validator::make($request->all(),[
                    'drivername'=>'required',
                    'company'=>'required',
                    'delivaryemail'=>'required',
                    'phone'=>'required|min:10',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }else{
                $data = new Driver();
                $data->user_id =Auth::user()->id;
                $data->drivername=$request['drivername'];
                $data->company=$request['company'];
                $data->deliveryemail=$request['delivaryemail'];
                $data->phone=$request['phone'];
                $data->save();
                return response()->json(['success'=>true,'data'=>$data],200);
                }
            }

        //get driver details:
            public function driverdetails(){
                $data=Driver::where('user_id',Auth::user()->id)->get();
                return response()->json($data);
            }

        //update driver details:
            public function updatedetails(Request $request){
                $validator = Validator::make($request->all(),[
                    'drivername'=>'required',
                    'company'=>'required',
                    'delivaryemail'=>'required|email',
                    'phone'=>'required|min:10',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }else{
                $data =Driver::where('user_id',Auth::id())->where('deliveryemail',$request['delivaryemail'])->first();
                $data->user_id =Auth::user()->id;
                $data->drivername=$request['drivername'];
                $data->company=$request['company'];
                $data->deliveryemail=$request['delivaryemail'];
                $data->phone=$request['phone'];
                $data->save();
                return response()->json(['message'=>'Updated Successfully'],200);
                }
            }

        //delete driver details:
            public function deletedetails(){
                $data= Driver::where('user_id',Auth::user()->id)->first();
                $data->delete();
                return response()->json(['message'=>'Deleted'],200);
            }

    //report details:
            public function report(Request $request){
                $validator = Validator::make($request->all(),[
                    'date_of_incident'=>'required',
                    'location'=>'required',
                    'witnessed_by'=>'required',
                    'phone_number_of_witness'=>'required|min:10',
                    'brief_statement'=>'required',
                    'upload_image'=>'required',
                    'report'=>'required',
                    'date'=>'required',
                    'number_plate'=>'required',
                    'mileage'=>'required',

                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }

                $data= $request['driver_id'];
                $data1=Driver::find($data);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Driver Id'],401);
                    }
                $user = new Report();
                $user->driver_id=$data;
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
                return response()->json(['message'=>'Data Stored Successfully'],200);
            }

        // get Singlereport details:
             public function getOnereportdetails($driver_id,$report_id){
                $drivreId= $driver_id;
                $findDriver=Driver::find($drivreId);
                    if ($findDriver==null){
                        return response()->json(['message'=>'Invalid Driver Id'],401);
                    }
                    $reportId= $report_id;
                    $findReport=Report::find($reportId);
                    if ($findReport==null){
                        return response()->json(['message'=>'Invalid Report Id'],401);
                    }

                $singleReport=Report::where('driver_id',$findDriver->id)->where('id',$findReport->id)->get();
                return response()->json(['success'=>true,'data'=> $singleReport],200);
            }

        // upadate report details:
            public function updatereport(Request $request){
                $validator = Validator::make($request->all(),[
                    'date_of_incident'=>'required',
                    'location'=>'required',
                    'witnessed_by'=>'required',
                    'phone_number_of_witness'=>'required|min:10',
                    'brief_statement'=>'required',
                    'upload_image'=>'required',
                    'report'=>'required',
                    'date'=>'required',
                    'number_plate'=>'required',
                    'mileage'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }else{
                $data= Driver::select('id')->first();
                $user=Report::where('driver_id',$data->id)->first();
                $user->user_id =$data->id;
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
                return response()->json(['message'=>'Updated Successfully'],200);
                }
            }

        // delete report details:
            public function deletereport(){
                $data=Driver::select('id')->first();
                $user=Report::where('driver_id',$data->id)->first();
                $user->delete();
                return response()->json(['message'=>'Deleted'],200);
            }
    //visual damage:
            public function visualdamage(Request $request){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                    'action'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                else{
                    $data = new Visual();
                    $data->user_id =Auth::user()->id;
                    $data->view=$request['view'];
                    $data->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('public/images'.$time);
                            Visual::make($image)->resize(300, 300)->save($location);
                        }
                    $data->feedback=$request['feedback'];
                    $data->action=$request['action'];
                    $data->save();
                    return response()->json(['message'=>'Data Stored Successfully'],200);
                }
            }

        // damagedetails:
            public function damagedetails(){
                $data= Visual::where('user_id',Auth::user()->id)->get();
                return response()->json($data);
            }

        //updatedamage:
            public function updatedamage(Request $request){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                    'action'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                else{
                    $data = Visual::where('user_id',Auth::user()->id)->first();
                    $data->user_id =Auth::user()->id;
                    $data->view=$request['view'];
                    $data->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('public/images'.$time);
                            Visual::make($image)->resize(300, 300)->save($location);
                        }
                    $data->feedback=$request['feedback'];
                    $data->action=$request['action'];
                    $data->save();
                    return response()->json(['message'=>'Updated Successfully'],200);
                }
            }

        //deletedamage:
            public function deletedamage(){
                $data=Visual::where('user_id',Auth::user()->id)->first();
                $data->delete();
                return response()->json(['message'=>'Deleted'],200);
            }

    //vehiclechecks:
            public function vehiclechecks(Request $request){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                    'action'=>'required',
                    'notes'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                else{
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
                    return response()->json(['message'=>'Data Stored Successfully'],200);
                }
            }

        //vehiclecheckdetails:
            public function vehiclecheckdetails(){
                $user= Vehicle::where('user_id',Auth::user()->id)->get();
                return response()->json($user);
            }

        //updatevehiclechecks:
            public function updatevehiclechecks(Request $request){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                    'action'=>'required',
                    'notes'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                else{
                    $user = Vehicle::where('user_id',Auth::user()->id)->first();
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
                    return response()->json(['message'=>'Updated Successfully'],200);
                }
            }

        //detletvehiclechecks:
            public function deletevehiclechecks(){
                $user=Vehicle::where('user_id',Auth::user()->id)->first();
                $user->delete();
                return response()->json(['message'=>'Deleted'],200);
            }

    //cabinchecks:
            public function cabinchecks(Request $request){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                    'action'=>'required',
                    'notes'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                else{
                    $data = new Cabin();
                    $data->user_id =Auth::user()->id;
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
                    return response()->json(['message'=>'Data Stored Successfully'],200);
                }
            }

        //cabincheckdetails:
            public function cabincheckdetails(){
                    $data = Cabin::where('user_id',Auth::id())->get();
                    return response()->json($data);

            }

        //updatcabinchecks:
            public function updatcabinchecks(Request $request){
                $validator = Validator::make($request->all(),[
                    'view'=>'required',
                    'image'=>'required',
                    'feedback'=>'required',
                    'action'=>'required',
                    'notes'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                else{
                    $data = Cabin::where('user_id',Auth::id())->first();
                    $data->user_id =Auth::user()->id;
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
                    return response()->json(['message'=>'Updated Successfully'],200);
                }
            }

        //deletecabinchecks:
            public function deletecabinchecks(){
                $data = Cabin::where('user_id',Auth::id())->first();
                $data->delete();
                return response()->json(['message'=>'Deleted'],200);
            }

    //reportsummary:
            public function reportsummary(){
                // $user = Visual::where('user_id',Auth::id())->get();
                $user = Visual::with('users')->get();
                return response()->json($user);
            }
}
