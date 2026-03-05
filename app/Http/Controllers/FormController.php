<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    //
    public function create(Request $request){
        return view('task27form');
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3',
            'email'=>'required|email',
            'description'=>'required|min:5',

        ]);

        $name=$request->input('name');
        $email=$request->input('email');
        $description=$request->input('description');

        return view('task27result',compact('name','email','description'));
    }
}
