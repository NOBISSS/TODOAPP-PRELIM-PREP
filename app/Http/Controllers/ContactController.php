<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function create(){
        return view('task30form');
    }

    public function submit(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:50',
            'email'=>'required|email',
            'message'=>'required|min:10|max:500',
        ]);

        session()->flash('contact_name',$request->name);
        session()->flash('contact_email',$request->email);
        session()->flash('contact_message',$request->message);

        session()->flash('submitted',true);

        return redirect()->back();
    }
}
