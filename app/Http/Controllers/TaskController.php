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

    //TASK 26
    public function showFlashForm()
    {
        return view('task26form');
    }

    public function storeFlash(Request $request){
        $request->validate([
            'name'=>'required|min:3|max:100',
            'description'=>'required|min:5',
        ]);

        session()->flash('success','Task "'.$request->name.'" Added Successfully"');

        return redirect()->back();
    }

    public function index(){
        $tasks=session()->get('tasks',[]);//default = empty array
        return view('task28',compact('tasks'));
    }

    public function storeTask(Request $request){
        $request->validate([
            'title'=>'required|min:3',
            'status'=>'required',
        ]);

        $tasks=session()->get('tasks',[]);

        $tasks[]=[
            'title'=>$request->input('title'),
            'status'=>$request->input('status'),
        ];//pushses new item to the end of array

        session()->put('tasks',$tasks);

        return redirect()->route('tasks.index')->with('success','Task Added Successfully');
    }
}
