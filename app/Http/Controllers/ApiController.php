<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use App\Models\Report;
use App\Models\Driver;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ApiController extends Controller
{
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
            $response['token']= $user->createToken('token')->plainTextToken;
            return response()->json($response,200);
            }
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

        public function delete(){
                $user=User::find(Auth::user()->id);
                $user->delete();
                return response()->json(['message'=>'Deleted'],200);
        }

        //Driver details;
        public function driver(Request $request){
            $validator = Validator::make($request->all(),[
                'drivername'=>'required',
                'company'=>'required',
                'delivaryemail'=>'required|email',
                'phone'=>'required|max:10',
            ]);
            if ($validator->fails()){
                return response()->json(['message'=>'Validator error'],401);
            }else{
            $data = new Driver();
            // $data->userid = $request['userid'];
            $data->user_id =Auth::user()->id;
            $data->drivername=$request['drivername'];
            $data->company=$request['company'];
            $data->deliveryemail=$request['delivaryemail'];
            $data->phone=$request['phone'];
            $data->save();
            return response()->json(['message'=>'Data Stored Successfully'],200);
            }
        }

        public function driverdetails(){
            $data=Driver::find(Auth::user()->id);
            return response()->json($data);
        }

        public function updatedetails(Request $request){
            $validator = Validator::make($request->all(),[
                'drivername'=>'required',
                'company'=>'required',
                'delivaryemail'=>'required|email',
                'phone'=>'required|max:10',
            ]);
            if ($validator->fails()){
                return response()->json(['message'=>'Validator error'],401);
            }else{
            $data = Driver::find(Auth::user()->id);
            // $data->userid = $request['userid'];
            $data->user_id =Auth::user()->id;
            $data->drivername=$request['drivername'];
            $data->company=$request['company'];
            $data->deliveryemail=$request['delivaryemail'];
            $data->phone=$request['phone'];
            $data->save();
            return response()->json(['message'=>'Data Updated Successfully'],200);
            }
        }

        public function deletedetails(){
            $data= Driver::find(Auth::user()->id);
            $data->delete();
            return response()->json(['message'=>'Deleted'],200);
        }

        // <--Report-->

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
        }else{

        $user = new Report();
        $user->user_id =Auth::user()->id;
        $user->date_of_incident =$request['date_of_incident'];
        $user->location =$request['location'];
        $user->witnessed_by =$request['witnessed_by'];
        $user->phone_number_of_witness =$request['phone_number_of_witness'];
        $user->brief_statement =$request['brief_statement'];
        $user->upload_image =$request['upload_image'];
        $user->report =$request['report'];
        $user->date =$request['date'];
        $user->number_plate =$request['number_plate'];
        $user->mileage=$request['mileage'];
        $user->save();
        return response()->json(['message'=>'Data Stored Successfully'],200);
        }
        }
        public function reportdetails(){
            $user=Report::find(Auth::user()->id);
            return response()->json($user);
        }
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

            $user = Report::find(Auth::user()->id);
            // dd($user);
            $user->user_id =Auth::user()->id;
            $user->date_of_incident =$request['date_of_incident'];
            $user->location =$request['location'];
            $user->witnessed_by =$request['witnessed_by'];
            $user->phone_number_of_witness =$request['phone_number_of_witness'];
            $user->brief_statement =$request['brief_statement'];
            $user->upload_image =$request['upload_image'];
            $user->report =$request['report'];
            $user->date =$request['date'];
            $user->number_plate =$request['number_plate'];
            $user->mileage=$request['mileage'];

            $user->save();
            return response()->json(['message'=>'Updated Successfully'],200);
            }
        }
        public function deletereport(){
            $user= Report::find(Auth::user()->id);
            // dd($user);
            $user->delete();
            return response()->json(['message'=>'Deleted'],200);
        }

}
