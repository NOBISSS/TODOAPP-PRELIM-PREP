<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;

class TaskDBController extends Controller
{
    //
    public function index(){
        $tasks=Task::all();

        return view('crud.index',compact('tasks'));
    }

    public function create(){
        return view('crud.create');
    }

    public function store(Request $request){
        $request->validate([
            'title'=>'required|min:3|max:100',
            'description'=>'required|min:5|max:100',
            'status'=>'required|in:pending,inprogress,completed',
        ]);

        Task::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'status'=>$request->status,
        ]);

        return redirect()->route('tasks.index')->with('success','Task Created Successfully');
    }

    public function edit($id){
        $task=Task::find($id);
        return view('crud.edit',compact('task'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'title'       => 'required|min:3|max:100',
            'description' => 'required|min:5',
            'status'      => 'required|in:pending,inprogress,completed',
        ]);

        $task=Task::find($id);
        $task->update([
            'title'       => $request->title,
            'description' => $request->description,
            'status'      => $request->status,
        ]);

        return redirect()->route('tasks.index')->with('success','Task Updated Successfully');   
    }

    public function destroy($id){
        $task=Task::find($id);
        $task->delet();

        return redirect()->route('tasks.index')->with('success','Task Deleted Successfully');
    }
}
