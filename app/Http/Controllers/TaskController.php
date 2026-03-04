<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    //
    public function create()
    {
        return view('task25form');
    }

    public function store(Request $request){
        $title=$request->input('title');
        $description=$request->input('description');

        return view('task24result',compact('title','description'));
    }

    public function storeValidated(Request $request){
        $request->validate([
            'title'=>'required|min:3|max:100',
            'description'=>'required|min:5',
        ]);

        $title=$request->input('title');
        $description=$request->input('description');

        return view('task24result',compact('title','description'));
    }
}
