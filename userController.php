<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class userController extends Controller
{
    //
    function getUser(){
        $user = DB::table('users')->where('name','nehaa')->get('name');
        $email = DB::table('users')->where('name', 'nehaa')->value('email');
        $user = DB::table('users')->find(3);
        return view('welcome',[
            'userDetails'=>$user
        ]);
      // $user= DB::select('select * from user');
      //return "hello";
      
    }
    function getPosts(){
        $posts=DB::table('exxx')->where('name',1)->get();
        foreach($posts as $p){
            echo $p->description;
        }
        //return $posts->description;
    }
}
