<?php

namespace App\Http\Controllers;

use Illuminate\Container\Attributes\DB as AttributesDB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    function index(){

        $users=DB::select('select * from info');
        // print_r($users);
        return view('role.index',compact('users'));
    }






    function create(){
        return view('role.create');
    }
    function store(Request $request){
        echo $request->name;
        echo $request->address;
        $request->validate([
            "name"=>"required|min:3",
            "address"=>"required|min:3"
        ]);
        DB::select("insert into info (name,address) values('$request->name','$request->address')");


        return redirect("/role")->with("success","data saved successfully");


    }





}
