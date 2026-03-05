<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    //
    public function create(){
        $courses=['BCA','BBA','BSC','BCOM','MCA','MBA'];
        return view('task29form',compact('courses'));
    }

    public function store(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email',
            'course'=>'required|in:BCA,BBA,BSC,BCOM,MCA,MBA',
        ]);

        return redirect()->back()->with('success','Student"'.$request->name.'" Registered Successfully');
    }
}
