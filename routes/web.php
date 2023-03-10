<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Mail\sendEmailUsingGmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::view('/','login');
Route::post('/user',[AdminController::class,'admin']);
Route::get('/user',[AdminController::class,'userlist']);
Route::post('/createuser',[AdminController::class,'createuser']) ;
Route::get('/updateuser/{id}',[AdminController::class,'updateuser']);
Route::Post('/updateuserdetails/{id}',[AdminController::class,'updateuserdetails']);
Route::Post('/driverdatails/{id}',[AdminController::class,'driverdatails']);
Route::get('/delete/{id}',[AdminController::class,'delete']);
//driver
Route::get('/driver/{user_id}',[AdminController::class,'driverlist']);
Route::get('/createdriver/{driver_id}',[AdminController::class,'newdriver']);
Route::post('/store/{driver_id}',[AdminController::class,'store']);
Route::get('/remove/{id}',[AdminController::class,'remove']);
//vehicle
Route::get('/report/{user_id}',[AdminController::class,'reportlist']);
Route::get('/removereport/{id}',[AdminController::class,'removereport']);

Route::get('/details/{driver_id}',[AdminController::class,'check']);
//updatevehiclecheck
Route::get('/updatevehiclecheck/{id}',[AdminController::class,'updatevehiclecheck']);
Route::post('/vehicleupdate/{driver_id}',[AdminController::class,'vehicleupdate']);
Route::get('/deletevehicle/{id}',[AdminController::class,'deletevehicle']);
//updatevisualcheck
Route::get('/updatevisualcheck/{id}',[AdminController::class,'updatevisualcheck']);
Route::post('/visualupdate/{driver_id}',[AdminController::class,'visualupdate']);
Route::get('/deletevisual/{id}',[AdminController::class,'deletevisual']);
//updatecabincheck
Route::get('/updatecabincheck/{id}',[AdminController::class,'updatecabincheck']);
Route::post('/cabinupdate/{driver_id}',[AdminController::class,'cabinupdate']);
Route::get('/deletecabin/{id}',[AdminController::class,'deletecabin']);

Route::get('/allrentallist',[AdminController::class,'allrentallist']);

Route::get('/summary/{driver_id}',[AdminController::class,'summary']);

Route::get('/pdf/{driver_id}',[AdminController::class,'pdf']);
Route::get('/edit/{driver_id}',[AdminController::class,'edit']);


Route::get('/send-email-using-gmail/{id}',[AdminController::class,'send']);
Route::get('/handle/{id}',[AdminController::class,'handle']);

