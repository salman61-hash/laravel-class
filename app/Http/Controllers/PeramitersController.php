<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeramitersController extends Controller
{
   function index(){
    return view('peramitter_practice.index');
   }



   function create($id="",$name=""){
    return view('peramitter_practice.create',compact('id','name'));
   }
}
