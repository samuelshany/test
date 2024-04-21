<?php

use App\Http\Controllers\PersonController;
use App\Http\Requests\PersonRequest;
use App\Models\Person;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/create',[PersonController::class,'create']);
Route::post('/storePerson',[PersonController::class,'store']);

Route::get('/',[PersonController::class,'index']);
Route::get('/person/{id}',[PersonController::class,'show']);
Route::get('/delete/{id}',[PersonController::class,'delete']);
