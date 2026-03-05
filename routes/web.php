<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ContactController;

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

//TASK 19 - Sum of First 10 Number

Route::get('/sumten',function(){
    $sum=0;
    for($i=1;$i<=10;$i++){
        $sum+=$i;
    }
    $numbers=range(1,10);
    return view('sumten',compact('sum','numbers'));
});

//Task 20 - Odd or Even Check
Route::get('/oddeven/{number}',function($number){
    return view('oddeven',compact('number'));
});

//TASK 21 - Arithmetic Operations with @switch
Route::get('/calculate/{num1}/{operator}/{num2}',function($num1,$operator,$num2){
    $result=0;
    switch($operator){
        case '+':$result=$num1+$num2;break;
        case '-':$result=$num1-$num2;break;
        case '*':$result=$num1*$num2;break;
        case '/':$result=$num1/$num2;break;
        default:$result="Invalid Operator!";
    }

    return view('calculate',compact('num1','operator','num2','result'));
});

//TASK 22 - Dynamic Page Color From Route
Route::get('/colorpage/{color}',function($color){
    //$color = 'bg-' . $color . '-500';
    return view('colorpage',compact('color'));
});

//TASK 23(A) - Route 1:Showing the FORM (GET)
Route::get("/task-form",function(){
    return view('taskform');
});

//TASK 23(B) -DISPLAY TASK IN PAGE
Route::post('/task-store',function(Request $request){
    $title=$request->input('title');
    $description=$request->input('description');
    return view('taskresult',compact('title','description'));
});

//TASK 24 - Route 1:Show form(GET)
Route::get('/task24',function(){
    return view('task24form');
});

Route::post('/task24/store',[TaskController::class,'store']);

//TASK 25 -Show Form
Route::get('/task25',[TaskController::class,'create']);

Route::post('/task25/store',[TaskController::class,'storeValidated']);

//TASK 26
Route::get('/task26',[TaskController::class,'showFlashForm']);
Route::post('/task26/store',[TaskController::class,'storeFlash']);

//TASK 27 - FormController routes
Route::get('/task27',[FormController::class,'create']);

Route::post('/task27/store',[FormController::class,'store']);

//Task 28 - index() and storeTask() with named Routes

Route::get('/task28',[TaskController::class,'index'])->name('tasks.index');

Route::post('/task28/store',[TaskController::class,'storeTask'])->name('tasks.store');

//Task 29
Route::get('/task29',[StudentController::class,'create'])->name('student.create');
Route::post('/task29/store',[StudentController::class,'store'])->name('student.store');

//TASK 30 Contact Us Form
Route::get('/task30',[ContactController::class,'create']);

Route::post('/task30/store',[ContactController::class,'submit']);

Route::get('/', function () {
    return view('welcome');
});