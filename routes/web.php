<?php

use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/role',[RoleController::class,'index']);



Route::get('/role/create',[RoleController::class,'create']);
Route::post('/role/store',[RoleController::class,'store']);
