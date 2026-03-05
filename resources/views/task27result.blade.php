@extends('layouts.master')
@section('title', 'Form Data — Task 27')
@section('heading', '✅ Data from FormController@store()')
@section('content')
    <div style="
        background:#dcfce7;
        border-left:4px solid #22c55e;
        padding:12px 20px;
        border-radius:6px;
        margin-bottom:24px;
        color:#166534;
        font-weight:bold;
    ">
        ✅ Form handled by FormController@store() successfully!
    </div>
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
            ">Name</p>
            <p style="
                font-size:20px;
                font-weight:bold;
                color:#1e293b;
            ">{{ $name }}</p>
        </div>
        <div style="
            border-top:1px solid #e2e8f0;
            padding-top:20px;
            margin-bottom:20px;
        ">
            <p style="
                font-size:12px;
                color:#94a3b8;
                text-transform:uppercase;
                letter-spacing:1px;
                margin-bottom:6px;
            ">Email</p>
            <p style="
                font-size:16px;
                color:#3b82f6;
            ">{{ $email }}</p>
        </div>
        <div style="border-top:1px solid #e2e8f0; padding-top:20px;">
            <p style="
                font-size:12px;
                color:#94a3b8;
                text-transform:uppercase;
                letter-spacing:1px;
                margin-bottom:6px;
            ">Description</p>
            <p style="
                font-size:16px;
                color:#374151;
                line-height:1.6;
            ">{{ $description }}</p>
        </div>
    </div>

    <a href="/task27" style="
        display:inline-block;
        margin-top:20px;
        background:#e2e8f0;
        color:#334155;
        padding:10px 20px;
        border-radius:8px;
        text-decoration:none;
        font-weight:bold;
    ">← Back to Form</a>
@endsection