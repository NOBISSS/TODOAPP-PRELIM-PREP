@extends('layouts.master')
@section('title', 'Task 27 — FormController')
@section('heading', '🎮 FormController — create() and store()')
@section('content')
    <div style="
        background:#dbeafe;
        border-left:4px solid #3b82f6;
        padding:10px 16px;
        border-radius:6px;
        margin-bottom:24px;
        font-size:13px;
        color:#1e40af;
    ">
        📌 This form is handled by
        <strong>FormController@create()</strong>
        and submits to
        <strong>FormController@store()</strong>
    </div>
    @if ($errors->any())
        <div style="
            background:#fee2e2;
            border-left:4px solid #ef4444;
            padding:12px 16px;
            border-radius:6px;
            margin-bottom:20px;
            color:#991b1b;
        ">
            <strong>Please fix these errors:</strong>
            <ul style="margin:8px 0 0 16px;">
                @foreach ($errors->all() as $error)
                    <li style="font-size:13px;">{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/task27/store" method="POST"
          style="max-width:500px;">
        @csrf
        <div style="margin-bottom:20px;">
            <label style="
                display:block;
                font-weight:bold;
                color:#374151;
                margin-bottom:6px;
            ">
                Name <span style="color:red;">*</span>
            </label>
            <input
                type="text"
                name="name"
                value="{{ old('name') }}"
                placeholder="Enter your name..."
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid {{ $errors->has('name') ? '#ef4444' : '#e2e8f0' }};
                    border-radius:8px;
                    font-size:15px;
                "
            >
            @error('name')
                <p style="color:#ef4444; font-size:13px; margin-top:6px;">
                    ⚠️ {{ $message }}
                </p>
            @enderror
        </div>
        <div style="margin-bottom:20px;">
            <label style="
                display:block;
                font-weight:bold;
                color:#374151;
                margin-bottom:6px;
            ">
                Email <span style="color:red;">*</span>
            </label>
            <input
                type="email"
                name="email"
                value="{{ old('email') }}"
                placeholder="Enter your email..."
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid {{ $errors->has('email') ? '#ef4444' : '#e2e8f0' }};
                    border-radius:8px;
                    font-size:15px;
                "
            >
            @error('email')
                <p style="color:#ef4444; font-size:13px; margin-top:6px;">
                    ⚠️ {{ $message }}
                </p>
            @enderror
        </div>
        <div style="margin-bottom:24px;">
            <label style="
                display:block;
                font-weight:bold;
                color:#374151;
                margin-bottom:6px;
            ">
                Description <span style="color:red;">*</span>
            </label>
            <textarea
                name="description"
                placeholder="Enter description..."
                rows="4"
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid {{ $errors->has('description') ? '#ef4444' : '#e2e8f0' }};
                    border-radius:8px;
                    font-size:15px;
                    resize:vertical;
                "
            >{{ old('description') }}</textarea>
            @error('description')
                <p style="color:#ef4444; font-size:13px; margin-top:6px;">
                    ⚠️ {{ $message }}
                </p>
            @enderror
        </div>
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
            ➕ Submit Form
        </button>
    </form>
@endsection