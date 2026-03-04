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
    return view('taskList');
});

//TASK 4
Route::get('/dynamic/{value}',function($value){
    return view('dynamic')->with('value',$value);
});

Route::get('/', function () {
    return view('welcome');
});
