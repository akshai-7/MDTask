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
