@extends('layouts.master')
@section('title','Add New Task');
@section('heading','Add New Task');
@section('content')
    <form action='/task-store' method="POST" style="max-width:500px;">
        @csrf
        <div style="margin-bottom:20px;">
            <label style="
                display:block;
                font-weight:bold;
                color:#374151;
                margin-bottom:6px;
            ">
                Task Title
            </label>
            <input
                type="text"
                name="title"
                placeholder="Enter Task title..."
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid #e2e8f0;
                    border-radius:8px;
                    font-size:15px;
                    outline:none;
                "
                >
        </div>
        <div style="margin-bottom:20px;">
            <label style="
                display:block;
                font-weight:bold;
                color:#374151;
                margin-bottom:6px;
            ">
                Task Description
            </label>
            <input
                type="text"
                name="description"
                placeholder="Enter Task Description..."
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid #e2e8f0;
                    border-radius:8px;
                    font-size:15px;
                    outline:none;
                "
                >
        </div>
         <button
            type="submit"
            style="
                background:#3b82f6;
                color:white;
                padding:12px 28px;
                border:none;
                border-radius:8px;
                font-size:16px;
                font-weight:bold;
                cursor:pointer;
            "
        >
            ➕ Add Task
        </button>
    </form>
@endsection