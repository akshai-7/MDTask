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
Route::get('/reportdetails',[ApiController::class,'reportdetails'])->middleware('auth:sanctum');
Route::post('updatereport',[ApiController::class,'updatereport'])->middleware('auth:sanctum');
Route::delete('deletereport',[ApiController::class,'deletereport'])->middleware('auth:sanctum');

Route::post('/visualdamage',[ApiController::class,'visualdamage'])->middleware('auth:sanctum');
Route::get('/damagedetails',[ApiController::class,'damagedetails'])->middleware('auth:sanctum');
Route::post('/updatedamage',[ApiController::class,'updatedamage'])->middleware('auth:sanctum');
Route::delete('deletedamage',[ApiController::class,'deletedamage'])->middleware('auth:sanctum');

Route::post('/vehiclechecks',[ApiController::class,'vehiclechecks'])->middleware('auth:sanctum');
Route::get('/vehiclecheckdetails',[ApiController::class,'vehiclecheckdetails'])->middleware('auth:sanctum');
Route::post('/updatevehiclechecks',[ApiController::class,'updatevehiclechecks'])->middleware('auth:sanctum');
Route::delete('deletevehiclechecks',[ApiController::class,'deletevehiclechecks'])->middleware('auth:sanctum');

Route::post('/cabinchecks',[ApiController::class,'cabinchecks'])->middleware('auth:sanctum');
Route::get('/cabincheckdetails',[ApiController::class,'cabincheckdetails'])->middleware('auth:sanctum');
Route::post('/updatcabinchecks',[ApiController::class,'updatcabinchecks'])->middleware('auth:sanctum');
Route::delete('deletecabinchecks',[ApiController::class,'deletecabinchecks'])->middleware('auth:sanctum');
