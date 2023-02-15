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
Route::post('/index',[AdminController::class,'admin']);
Route::get('/index',[AdminController::class,'create']);
//user
Route::get('/index',[AdminController::class,'userlist']);
Route::get('/delete/{id}',[AdminController::class,'delete']);
//driver
Route::get('/index1/{user_id}',[AdminController::class,'driverlist']);
Route::get('/remove/{id}',[AdminController::class,'remove']);
//vehicle
Route::get('/report/{user_id}',[AdminController::class,'reportlist']);
Route::get('/removereport/{id}',[AdminController::class,'removereport']);
//Visualdamage
Route::get('/visualcheck/{user_id}',[AdminController::class,'visualcheck']);
Route::get('//{id}',[AdminController::class,'remove']);
//vehicle check
Route::get('/vehiclecheck/{user_id}',[AdminController::class,'vehiclecheck']);
Route::view('/vehiclecheck',[AdminController::class,'vehicle']);
//cabin check
Route::get('/cabincheck/{user_id}',[AdminController::class,'cabincheck']);



// Route::get('/check/{user_id}',[AdminController::class,'check']);
Route::get('/details/{user_id}',[AdminController::class,'check']);


