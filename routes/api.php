<?php

use Illuminate\Http\Request;
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
Route::get('/getOnereportdetails/{driver_id}/report/{report_id}',[ApiController::class,'getOnereportdetails'])->middleware('auth:sanctum');
Route::post('updatereport/{driver_id}/report/{report_id}',[ApiController::class,'updatereport'])->middleware('auth:sanctum');
Route::delete('deletereport/{driver_id}/report/{report_id}',[ApiController::class,'deletereport'])->middleware('auth:sanctum');

Route::post('/visualdamage',[ApiController::class,'visualdamage'])->middleware('auth:sanctum');
Route::get('/damagedetails/{driver_id}/visual/{visual_id}',[ApiController::class,'damagedetails'])->middleware('auth:sanctum');
Route::post('/updatedamage/{driver_id}/visual/{visual_id}',[ApiController::class,'updatedamage'])->middleware('auth:sanctum');
Route::delete('deletedamage/{driver_id}/visual/{visual_id}',[ApiController::class,'deletedamage'])->middleware('auth:sanctum');

Route::post('/vehiclechecks',[ApiController::class,'vehiclechecks'])->middleware('auth:sanctum');
Route::get('/vehiclecheckdetails',[ApiController::class,'vehiclecheckdetails'])->middleware('auth:sanctum');
Route::post('/updatevehiclechecks',[ApiController::class,'updatevehiclechecks'])->middleware('auth:sanctum');
Route::delete('deletevehiclechecks',[ApiController::class,'deletevehiclechecks'])->middleware('auth:sanctum');

Route::post('/cabinchecks',[ApiController::class,'cabinchecks'])->middleware('auth:sanctum');
Route::get('/cabincheckdetails',[ApiController::class,'cabincheckdetails'])->middleware('auth:sanctum');
Route::post('/updatcabinchecks',[ApiController::class,'updatcabinchecks'])->middleware('auth:sanctum');
Route::delete('deletecabinchecks',[ApiController::class,'deletecabinchecks'])->middleware('auth:sanctum');

Route::get('/reportsummary',[ApiController::class,'reportsummary'])->middleware('auth:sanctum');
