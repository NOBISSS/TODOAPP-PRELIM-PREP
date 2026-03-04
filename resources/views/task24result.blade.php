@extends('layouts.master')

@section('title', 'Task Stored')

@section('heading', '✅ Task Received by Controller')

@section('content')


    {{-- Show which controller handled this --}}
    <div style="
        background:#dbeafe;
        border-left:4px solid #3b82f6;
        padding:12px 20px;
        border-radius:6px;
        margin-bottom:24px;
        color:#1e40af;
        font-size:14px;
    ">
        📌 Handled by <strong>TaskController@store()</strong> method
    </div>

    {{-- Display form data --}}
    <div style="
        background:#f8fafc;
        border:2px solid #e2e8f0;
        border-radius:12px;
        padding:24px;
        max-width:500px;
    ">
        <div style="margin-bottom:20px;">
            <p style="
                font-size:12px;
                color:#94a3b8;
                text-transform:uppercase;
                letter-spacing:1px;
                margin-bottom:6px;
            ">Task Title</p>
            <p style="
                font-size:20px;
                font-weight:bold;
                color:#1e293b;
            ">{{ $title }}</p>
        </div>

        <div style="border-top:1px solid #e2e8f0; padding-top:20px;">
            <p style="
                font-size:12px;
                color:#94a3b8;
                text-transform:uppercase;
                letter-spacing:1px;
                margin-bottom:6px;
            ">Task Description</p>
            <p style="
                font-size:16px;
                color:#374151;
                line-height:1.6;
            ">{{ $description }}</p>
        </div>
    </div>

    <a href="/task24" style="
        display:inline-block;
        margin-top:20px;
        background:#e2e8f0;
        color:#334155;
        padding:10px 20px;
        border-radius:8px;
        text-decoration:none;
        font-weight:bold;
    ">← Add Another Task</a>

@endsection