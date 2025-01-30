<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RoleController extends Controller
{
    function index(){

        $users=[
            ["id"=>1, "name"=>"akash","address"=>"Dhaka"],
            ["id"=>2, "name"=>"jibon","address"=>"Dhaka"],
            ["id"=>3, "name"=>"akash","address"=>"Dhaka"],
            ["id"=>4, "name"=>"akash","address"=>"Dhaka"],
            ["id"=>5, "name"=>"akash","address"=>"Dhaka"]
        ];
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
        return redirect("role")->with("success","data saved successfully");
    }
}
