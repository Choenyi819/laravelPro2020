<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectsController extends Controller
{
    //
    function index(){
        $proj=\App\Project::all();
        return view('demo',compact('proj'));
    }
    function create(){
        return view('projectForm');
    }
    function store(Request $req){
        $p=new \App\Project;

        //Fetch values from form
        $pname=$req->project_name;
        $pdesc=$req->description;

        //store the value into table using "project" model
        $p->name=$pname;
        $p->description=$pdesc;
        $p->save();
        return "success";
    }
}
