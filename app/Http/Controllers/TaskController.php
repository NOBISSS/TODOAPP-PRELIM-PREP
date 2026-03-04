<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function store(Request $request){
        $title=$request->input('title');
        $description=$request->input('description');

        return view('task24result',compact('title','description'));
    }
}
