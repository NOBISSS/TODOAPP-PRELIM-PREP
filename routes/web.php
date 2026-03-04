<?php

use Illuminate\Support\Facades\Route;

//Task 1 - Dynamic Route With Single Parameter
Route::get("/task/{name}",function($name){
     return 'Task name is: '. $name;
});

//TASK 2

Route::get("/task/{name}/{priority}",function($name,$priority){
    return 'Task:'.$name.' Priority:'.$priority;
});

//TASK 3

Route::get("/tasklist",function(){
    $tasks=[
        ['title'=>'Buy Milk', 'status'=>'completed'],
        ['title'=>'Do Homework', 'status'=>'pending'],
        ['title'=>'Learn Laravel', 'status'=>'completed'],
    ];
    return view('taskList',compact('tasks'));
});

//TASK 4
Route::get('/dynamic/{value}',function($value){
    return view('dynamic')->with('value',$value);
});

//TASK 5
Route::get('/multivars',function(){
    $name="Parth Chauhan";
    $course="BCA";
    $sem="6";
    return view('multivars')->with([
        'name'=>$name,
        'course'=>$course,
        'sem'=>$sem
    ]);
});

//TASK 6- USING COMPACT METHOD
Route::get('/compactmethod',function(){
    $name="Raj Patel";
    $city="Surat";
    $course="BCA";
    $method="Compact()";

    return view('compactwith',compact('name','city','course','method'));
});

//TASK 6- USING WITH METHOD
Route::get('/withmethod',function(){
    $name="Raj Patel";
    $city="Surat";
    $course="BCA";
    $method="With()";

    return view('compactwith')->with([
        'name'=>$name,
        'city'=>$city,
        'course'=>$course,
        'method'=>$method,
    ]);
});

//TASK 11a- With Tasks(unless won't trigger)
Route::get('/taskswith',function(){
    $tasks=[
        ['title'=>'Buy Milk', 'status'=>'completed'],
        ['title'=>'Do Homework', 'status'=>'pending'],
        ['title'=>'Learn Laravel', 'status'=>'completed'],
    ];
    return view('unless',compact('tasks'));
});

//TASK 11b- Empty Tasks(unless WILL trigger)
Route::get('/taskswithout',function(){
    $tasks=[];
    return view('unless',compact('tasks'));
});

//TASK 12 - @switch based on task status

Route::get("/switchtask",function(){
    $tasks=[
        ['title'=>'Buy Milk', 'status'=>'completed'],
        ['title'=>'Do Homework', 'status'=>'pending'],
        ['title'=>'Learn Laravel', 'status'=>'completed'],
        ['title'=>'DO BICEPS', 'status'=>''],
    ];
    return view('switchtask',compact('tasks'));
});


//TASK 13 @for loop to generate 5 Sample Task

Route::get('/fortask',function(){
    return view('fortask');
});

//TASK 14 Multiplication
Route::get('/multiply/{number}',function($number){
    return view('multiply',compact('number'));
});

//TASK 15 - Factorial Calculation from Route

Route::get('/factorial/{number}',function($number){
    $factorial=1;
    for($i=1;$i<=$number;$i++){
        $factorial=$factorial*$i;
    }

    return view('factorial',compact('number','factorial'));
});

//TASK 16 Check Positive,negative or zero from route
Route::get('/checknumber/{number}',function($number){
    return view('checknumber',compact('number'));
});

//TASK 17 - Array of 5 Elements Displayed With @foreach

Route::get('/arraylist',function(){
    $fruits=['Mango','Apple','Banana'];

    $students=[
        ['name'=>'Raj Patel','city'=>'Surat','grade'=>'A'],
        ['name'=>'Nisha Modi','city'=>'Ahmedabad','grade'=>'B'],
        ['name'=>'Meet Desai','city'=>'Vadodara','grade'=>'A'],
    ];

    return view('arraylist',compact('fruits','students'));
});

//TASK 18 Master Layout Demo
Route::get('/home',function(){
    return view('home');
});

Route::get('/', function () {
    return view('welcome');
});
