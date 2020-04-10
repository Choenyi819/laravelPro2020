<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/home', function () {
//return view('welcome');
   /* // $name=request("n");
    // return view('welcome',[
    //     "nammee"=>$name
    // // return $name;
    // ]);*/
//});
/*Route::get('/practice/{post}',function($sun){
  $sun1=[
      '1'=>'employee number 1',
      '2'=>'employee number 2',
      '3'=>'employee number 3',
      '4'=>'employee number 4',
      '5'=>'employee number 5'
  ];
  return view('practice',[
      'practice'=>$sun1[$sun] ?? 'only 5 employees exists.'
  ]);
  });*/
  /*Route::get('/home/{post}',function($p){
    // return $p;       //to print on browser
   //  $books=['name1'=>'DBMS',
     //       'name2'=>'Operating System'];
    // return view('demo');
    return view('home',[        //for webpage
        //'p'=> $books[$p]
        'name'=>$p
    ]);
 });*/

 //Route::get('/mian', function(){
   // return view('mian');
 //});
   

 /*Route::get('/welcome/{name}',function($n){
     return view('welcome',[
         'name'=>$n

     ]);
 });*/

 //Route::get('/contactUs','pageController@contactUs');
 //Route::get('/welcome','pageController@welcome');
 //Route::get('/home','pageController@home');
 //Route::get('/users','userController@getUser');
/*
 Route::get('/Q1CA', function(){
     return view('Q1CA');
 });
 Route::get('/home1',function(){
     return view('home1');
 });
 Route::get('/Q1CA/{name}',function($x){
     return view('');
 });
 Route::get('/home1','pageController@home1');
 Route::get('/tutorial','pageController@tutorial');
 Route::get('/contact','pageController@contact');
 Route::get('/tutorial2','pageController@tutorial2');


 Route::get('/',function(){
     return view('showDemo');
 });

 //Route::get('/show/{username}/{id?}','myController@param');
 Route::get('/show/{name}','userController@getPosts');
 Route::get('/lala','userController@getUser');*/

 Route::get('/project/create','projectsController@create');
 Route::post('/storeProject','projectsController@store');

 Route::resource('/projects','myProjectsController');
// ////Project//// //
 Route::get('/', function () {
    return view('welcome1');
});