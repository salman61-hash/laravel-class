<?php

use App\Http\Controllers\PeramitersController;
use App\Http\Controllers\RoleController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/role',[RoleController::class,'index']);
Route::get('/peramitter_practice',[PeramitersController::class,'index']);



Route::get('/peramitter_practice/create/{id?}/{name?}',[PeramitersController::class,'create']);



Route::get('/role/create',[RoleController::class,'create']);
Route::post('/role/store',[RoleController::class,'store']);
