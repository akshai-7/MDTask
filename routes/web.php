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
Route::get('/index',[AdminController::class,'userlist']);
Route::get('/delete/{id}',[AdminController::class,'delete']);
Route::get('/index1/{user_id}',[AdminController::class,'reportlist']);
