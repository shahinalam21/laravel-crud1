<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

Route::get('/',[StudentController::class,'index']);
Route::get('/student/create',[StudentController::class,'create']);
Route::post('/student/store',[StudentController::class,'store']);

Route::get('student/show/{id}',[StudentController::class,'show']);
Route::get('student/edit/{id}',[StudentController::class,'edit']);
Route::post('student/update/{id}',[StudentController::class,'update']);
Route::get('student/destroy/{id}',[StudentController::class,'destroy']);
