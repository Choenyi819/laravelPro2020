<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class myController extends Controller
{
    //
    function Contact(){
        return view('showDemo',[
            'name'=>'printMe', 
            'salary'=>50000
        ]);
    }
    function param($username,$id){
        return view('showDemo',[
            'name'=>$username,
            'id'=>$id
        ]);
    }
    function getEmployee(){
        $obj=[
        ['id'=>101,'name'=>'Jatin','city'=>'London'],
        ['id'=>102,'name'=>'Patin','city'=>'Kondon'],
        ['id'=>103,'name'=>'Satin','city'=>'Pondon']
    ];

    return view('showDemo',[
        'employee'=>$obj
    ]);
    }
}
