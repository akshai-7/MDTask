<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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
Route::get('/user',[AdminController::class,'create']);
Route::get('/user',[AdminController::class,'userlist']);
Route::get('/createuser',[AdminController::class,'newuser']);
Route::post('/createuser',[AdminController::class,'createuser']);
Route::get('/updateuser/{id}',[AdminController::class,'updateuser']);
Route::Post('/updateuserdetails/{id}',[AdminController::class,'updateuserdetails']);
Route::get('/delete/{id}',[AdminController::class,'delete']);
//driver
Route::get('/driver/{user_id}',[AdminController::class,'driverlist']);
Route::get('/createdriver/{user_id}',[AdminController::class,'newdriver']);
Route::post('/store/{id}',[AdminController::class,'store']);
Route::get('/remove/{id}',[AdminController::class,'remove']);
//vehicle
Route::get('/report/{user_id}',[AdminController::class,'reportlist']);
Route::get('/removereport/{id}',[AdminController::class,'removereport']);

Route::get('/details/{user_id}',[AdminController::class,'check']);
//updatevehiclecheck
Route::get('/updatevehiclecheck/{id}',[AdminController::class,'updatevehiclecheck']);
Route::post('/vehicleupdate/{user_id}',[AdminController::class,'vehicleupdate']);
Route::get('/deletevehicle/{id}',[AdminController::class,'deletevehicle']);
//updatevisualcheck
Route::get('/updatevisualcheck/{id}',[AdminController::class,'updatevisualcheck']);
Route::post('/visualupdate/{user_id}',[AdminController::class,'visualupdate']);
Route::get('/deletevisual/{id}',[AdminController::class,'deletevisual']);
//updatecabincheck
Route::get('/updatecabincheck/{id}',[AdminController::class,'updatecabincheck']);
Route::post('/cabinupdate/{user_id}',[AdminController::class,'cabinupdate']);
Route::get('/deletecabin/{id}',[AdminController::class,'deletecabin']);

Route::get('/allrentallist',[AdminController::class,'allrentallist']);

Route::get('/summary/{user_id}',[AdminController::class,'summary']);

Route::get('/pdf',[AdminController::class,'pdf']);
Route::get('/edit/{user_id}',[AdminController::class,'edit']);


