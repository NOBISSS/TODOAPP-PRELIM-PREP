@extends('layouts.master')

@section('title', 'Task 24 — TaskController')

@section('heading', '🎮 Form using TaskController store()')

@section('content')

    <p style="color:#64748b; margin-bottom:20px;">
        This form submits to <strong>TaskController@store()</strong>
        instead of a route closure!
    </p>

    <form action="/task24/store" method="POST"
          style="max-width:500px;">
        @csrf

        {{-- Title --}}
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
                placeholder="Enter task title..."
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid #e2e8f0;
                    border-radius:8px;
                    font-size:15px;
                "
            >
        </div>

        {{-- Description --}}
        <div style="margin-bottom:24px;">
            <label style="
                display:block;
                font-weight:bold;
                color:#374151;
                margin-bottom:6px;
            ">
                Task Description
            </label>
            <textarea
                name="description"
                placeholder="Enter task description..."
                rows="4"
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid #e2e8f0;
                    border-radius:8px;
                    font-size:15px;
                    resize:vertical;
                "
            ></textarea>
        </div>

        {{-- Submit --}}
        <button type="submit" style="
            background:#3b82f6;
            color:white;
            padding:12px 28px;
            border:none;
            border-radius:8px;
            font-size:16px;
            font-weight:bold;
            cursor:pointer;
        ">
            ➕ Add Task via Controller
        </button>

    </form>

@endsection