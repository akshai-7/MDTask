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
                $user=User::find(Auth::user()->id)->first();
                $user->delete();
                return response()->json(['message'=>'Deleted'],200);
            }

    //driver details;
            public function driver(Request $request){
                $validator = Validator::make($request->all(),[
                    'drivername'=>'required',
                    'company'=>'required',
                    'deliveryemail'=>'required',
                    'phone'=>'required|min:10',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }else{
                $data = new Driver();
                $data->user_id =Auth::user()->id;
                $data->drivername=$request['drivername'];
                $data->company=$request['company'];
                $data->deliveryemail=$request['deliveryemail'];
                $data->phone=$request['phone'];
                $data->save();
                return response()->json(['success'=>true,'data'=>$data],200);
                }
            }

        //get driver details:
            public function driverdetails(){
                $data=Driver::where('user_id',Auth::user()->id)->get();
                return response()->json(['success'=>true,'data'=> $data],200);
            }

        //update driver details:
            public function updatedetails(Request $request){
                $validator = Validator::make($request->all(),[
                    'drivername'=>'required',
                    'company'=>'required',
                    'deliveryemail'=>'required|email',
                    'phone'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }else{
                $data =Driver::where('user_id',Auth::user()->id)->first();
                $data->user_id =Auth::user()->id;
                $data->drivername=$request['drivername'];
                $data->company=$request['company'];
                $data->deliveryemail=$request['deliveryemail'];
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
                // $data= $request['driver_id'];
                $data= Auth::user()->id;
                    $data1=User::find($data);
                        if ($data1==null){
                            return response()->json(['message'=>'Invalid Id'],401);
                        }
                $user = new Report();
                $user->user_id=$data1->id;
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
                        // Report::make($upload_image)->resize(300, 300)->save($location);
                    }
                $user->report =$request['report'];
                $user->date =$request['date'];
                $user->number_plate =$request['number_plate'];
                $user->mileage=$request['mileage'];
                $user->save();
                return response()->json(['message'=>'Data Stored Successfully'],200);
            }

        // get Singlereport details:
             public function getOnereportdetails($report_id){
                $user=Auth::user()->id;
                        $user1=User::find($user);
                        if ($user1==null){
                            return response()->json(['message'=>'Invalid Id'],401);
                        }
                $data2= $report_id;
                    $data3=Report::find($data2);
                      if ( $data3==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $singleReport=Report::where('id',$data3->id)->where('user_id',$user1->id)->first();
                return response()->json(['success'=>true,'data'=> $singleReport],200);
            }

        // upadate report details:
            public function updatereport(Request $request,$report_id){
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
                $data2=$report_id;
                    if ($data2==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user=Report::where('user_id',Auth::user()->id)->where('id',$data2->id)->first();
                $user->user_id =Auth::user()->id;
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
                return response()->json(['message'=>'Updated Successfully'],200);
            }

        // delete report details:
            public function deletereport($report_id){
                $user=Auth::user()->id;
                    $user1=User::find($user);
                    if ($user1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data1=$report_id;
                    $data2=Report::find($data1);
                    if ($data2==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user=Report::where('user_id',$user1->id)->where('id',$data2->id)->first();
                $user->delete();
                return response()->json(['message'=>'Deleted'],200);
            }

    //visual damage:
            public function visualdamage(Request $request){
                $validator = Validator::make($request->all(),[
                    // 'view'=>'required',
                    // 'image'=>'required',
                    // 'feedback'=>'required',
                    // 'action'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                $user=Auth::user()->id;
                    $data1=User::find($user);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data = new Visual();
                $data->user_id =$user;
                $data->view=$request['view'];
                $data->image=$request['image'];
                        if($request->hasfile('image')){
                            $image = $request->file('image');
                            $time = $image->getClientOriginalName();
                            $location=public_path($time);
                            $data->image =$time;
                        }

                $data->feedback=$request['feedback'];
                $data->action=$request['action'];
                $data->save();
                return response()->json(['message'=>'Data Stored Successfully'],200);
            }

        // damagedetails:
            public function damagedetails($visual_id){
                $user=Auth::user()->id;
                    $user1=User::find($user);
                    if ($user1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $visualId= $visual_id;
                    $data1=Visual::find($visualId);
                        if ($data1==null){
                            return response()->json(['message'=>'Invalid Id'],401);
                        }
                $user=Visual::where('user_id',$user1->id)->where('id',$data1->id)->get();
                return response()->json(['success'=>true,'data'=> $user],200);
            }

        //updatedamage:
            public function updatedamage(Request $request,$visual_id){
                $validator = Validator::make($request->all(),[
                    // 'view'=>'required',
                    // 'image'=>'required|file',
                    // 'feedback'=>'required',
                    // 'action'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                $user=Auth::user()->id;
                        $user1=User::find($user);
                        if ($user1==null){
                            return response()->json(['message'=>'Invalid Id'],401);
                        }
                        // dd($user1->id);
                $user2=$visual_id;
                        $user3=Visual::find($user2);
                        if ($user3==null){
                            return response()->json(['message'=>'Invalid Id'],401);
                        }
                $data = Visual::where('user_id',$user1->id)->where('id',$user3->id)->first();
                $data->user_id = $user1->id;
                $data->view=$request['view'];
                $data->image =$request['image'];
                if($request->hasfile('image')){
                    $image = $request->file('image');
                    $time = $image->getClientOriginalName();
                    $location=public_path($time);
                    $data->image =$time;
                }
                $data->feedback=$request['feedback'];
                $data->action=$request['action'];
                $data->save();
                return response()->json(['message'=>'Updated Successfully'],200);
            }

        //deletedamage:
            public function deletedamage($visual_id){
                $user=Auth::user()->id;
                    $user1=User::find($user);
                    if ($user1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data1=$visual_id;
                    $data2=Visual::find($data1);
                    if ($data2==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user=Visual::where('driver_id',$user1->id)->where('id',$data2->id)->first();
                $user->delete();
                return response()->json(['message'=>'Deleted'],200);
            }

    //vehiclechecks:
            public function vehiclechecks(Request $request){
                $validator = Validator::make($request->all(),[
                    // 'view'=>'required',
                    // 'image'=>'required',
                    // 'feedback'=>'required',
                    // 'action'=>'required',
                    // 'notes'=>'required',
                ]);
                if($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                $data= Auth::user()->id;
                    $data1=User::find($data);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user = new Vehicle();
                $user->user_id =$data1->id;
                $user->view=$request['view'];
                $user->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('/images'.$time);
                            // Vehicle::make($image)->resize(300, 300)->save($location);
                        }
                $user->feedback=$request['feedback'];
                $user->action=$request['action'];
                $user->notes=$request['notes'];
                $user->save();
                return response()->json(['message'=>'Data Stored Successfully'],200);

            }

        //vehiclecheckdetails:
            public function vehiclecheckdetails($vehicle_id){
                $data= Auth::user()->id;
                    $data1=User::find($data);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $vehicleId= $vehicle_id;
                    $data2=Vehicle::find($vehicleId);
                    if ($data2==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user=Vehicle::where('user_id',$data1->id)->where('id',$data2->id)->first();
                return response()->json(['success'=>true,'data'=> $user],200);
            }

        //updatevehiclechecks:
            public function updatevehiclechecks(Request $request,$vehicle_id){
                $validator = Validator::make($request->all(),[
                    // 'view'=>'required',
                    // 'image'=>'required',
                    // 'feedback'=>'required',
                    // 'action'=>'required',
                    // 'notes'=>'required',
                ]);
                if ($validator->fails()){
                    return response()->json(['message'=>'Validator error'],401);
                }
                $data= Auth::user()->id;
                    $data1=User::find($data);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data2=$vehicle_id;
                    $data3=Vehicle::find($data2);
                    if ($data3==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user = Vehicle::where('user_id',$data1->id)->where('id',$data3->id)->first();
                $user->user_id =$data1->id;
                $user->view=$request['view'];
                $user->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('/images'.$time);
                            // Vehicle::make($image)->resize(300, 300)->save($location);
                        }
                $user->feedback=$request['feedback'];
                $user->action=$request['action'];
                $user->notes=$request['notes'];
                $user->save();
                return response()->json(['message'=>'Updated Successfully'],200);
            }

        //detletvehiclechecks:
            public function deletevehiclechecks($vehicle_id){
                $data=Auth::user()->id;
                    $data1=User::find($data);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data2=$vehicle_id;
                    $data3=Vehicle::find($data2);
                    if ($data3==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user=Vehicle::where('user_id',$data1->id)->where('id',$data3->id)->first();
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
                $user=Auth::user()->id;
                    $data1=User::find($user);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data = new Cabin();
                $data->user_id=$data1->id;
                $data->view=$request['view'];
                $data->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('/images'.$time);
                            // Cabin::make($image)->resize(300, 300)->save($location);
                        }
                $data->feedback=$request['feedback'];
                $data->action=$request['action'];
                $data->notes=$request['notes'];
                $data->save();
                return response()->json(['message'=>'Data Stored Successfully'],200);
            }

        //cabincheckdetails:
            public function cabincheckdetails($cabin_id){
                $user=Auth::user()->id;
                    $data1=User::find($user);
                    if ($data1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $cabinId= $cabin_id;
                    $data2=Cabin::find($cabinId);
                        if ($data2==null){
                            return response()->json(['message'=>'Invalid Id'],401);
                        }
                $user=Cabin::where('user_id',$data1->id)->where('id',$data2->id)->first();
                return response()->json(['success'=>true,'data'=> $user],200);
            }

        //updatcabinchecks:
            public function updatcabinchecks(Request $request,$cabin_id){
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
                $user=Auth::user()->id;
                    $user1=User::find($user);
                    if ($user1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user2= $cabin_id;
                    $user3=Cabin::find($user2);
                    if ($user3==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data = Cabin::where('user_id',$user1->id)->where('id',$user3->id)->first();
                $data->user_id=$user1->id;
                $data->view=$request['view'];
                $data->image =$request['image'];
                        if($request->hasfile('image')){
                            $image =$request->file('image');
                            $time = time().'.'.$image->getClientOriginalExtension();
                            $location = public_path('/images'.$time);
                            // Cabin::make($image)->resize(300, 300)->save($location);
                        }
                $data->feedback=$request['feedback'];
                $data->action=$request['action'];
                $data->notes=$request['notes'];
                $data->save();
                return response()->json(['message'=>'Updated Successfully'],200);
            }

        //deletecabinchecks:
            public function deletecabinchecks($cabin_id){
                $user=Auth::user()->id;
                    $user1=User::find($user);
                    if ($user1==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $data2=$cabin_id;
                    $data3=Vehicle::find($data2);
                    if ($data3==null){
                        return response()->json(['message'=>'Invalid Id'],401);
                    }
                $user=Cabin::where('driver_id',$user1->id)->where('id',$data3->id)->first();
                $user->delete();
                return response()->json(['message'=>'Deleted'],200);
            }

}
