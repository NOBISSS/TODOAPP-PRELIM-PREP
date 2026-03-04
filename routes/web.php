<?php

use Illuminate\Support\Facades\Route;

//Task 1 - Dynamic Route With Single Parameter
Route::get("/task/{name}",function($name){
     return 'Task name is: '. $name;
});

Route::get('/', function () {
    return view('welcome');
});
