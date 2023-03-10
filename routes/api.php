<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/register',[ApiController::class,'register']);
Route::post('/login',[ApiController::class,'login']);
Route::get('/getdetails',[ApiController::class,'getdetails'])->middleware('auth:sanctum');
Route::post('update',[ApiController::class,'update'])->middleware('auth:sanctum');
Route::delete('delete',[ApiController::class,'delete'])->middleware('auth:sanctum');

Route::post('/driver',[ApiController::class,'driver'])->middleware('auth:sanctum');
Route::get('/driverdetails',[ApiController::class,'driverdetails'])->middleware('auth:sanctum');
Route::post('updatedetails',[ApiController::class,'updatedetails'])->middleware('auth:sanctum');
Route::delete('deletedetails',[ApiController::class,'deletedetails'])->middleware('auth:sanctum');

Route::post('/report',[ApiController::class,'report'])->middleware('auth:sanctum');
Route::get('/getOnereportdetails/report/{report_id}',[ApiController::class,'getOnereportdetails'])->middleware('auth:sanctum');
Route::post('updatereport/report/{report_id}',[ApiController::class,'updatereport'])->middleware('auth:sanctum');
Route::delete('deletereport/report/{report_id}',[ApiController::class,'deletereport'])->middleware('auth:sanctum');

Route::post('/visualdamage/{user_id}',[ApiController::class,'visualdamage'])->middleware('auth:sanctum');
Route::get('/damagedetails/visual/{visual_id}',[ApiController::class,'damagedetails'])->middleware('auth:sanctum');
Route::post('/updatedamage/visual/{visual_id}',[ApiController::class,'updatedamage'])->middleware('auth:sanctum');
Route::delete('deletedamage/visual/{visual_id}',[ApiController::class,'deletedamage'])->middleware('auth:sanctum');

Route::post('/vehiclechecks/{user_id}',[ApiController::class,'vehiclechecks'])->middleware('auth:sanctum');
Route::get('/vehiclecheckdetails/vehicle/{vehicle_id}',[ApiController::class,'vehiclecheckdetails'])->middleware('auth:sanctum');
Route::post('/updatevehiclechecks/vehicle/{vehicle_id}',[ApiController::class,'updatevehiclechecks'])->middleware('auth:sanctum');
Route::delete('deletevehiclechecks/vehicle/{vehicle_id}',[ApiController::class,'deletevehiclechecks'])->middleware('auth:sanctum');

Route::post('/cabinchecks/{user_id}',[ApiController::class,'cabinchecks'])->middleware('auth:sanctum');
Route::get('/cabincheckdetails/cabin/{cabin_id}',[ApiController::class,'cabincheckdetails'])->middleware('auth:sanctum');
Route::post('/updatcabinchecks/cabin/{cabin_id}',[ApiController::class,'updatcabinchecks'])->middleware('auth:sanctum');
Route::delete('deletecabinchecks/cabin/{cabin_id}',[ApiController::class,'deletecabinchecks'])->middleware('auth:sanctum');

Route::get('/reportsummary',[ApiController::class,'reportsummary'])->middleware('auth:sanctum');
