@extends('layouts.master')

@section('title', 'Task 26 — Flash Message')

@section('heading', '💬 Flash Message with redirect()->back()')

@section('content')

    {{-- Task 26 — Show flash success message if exists --}}
    @if (session('success'))
    {{--  ↑ checks if flash message exists in session --}}
        <div style="
            background:#dcfce7;
            border-left:4px solid #22c55e;
            padding:14px 20px;
            border-radius:8px;
            margin-bottom:24px;
            color:#166534;
            font-size:15px;
            display:flex;
            align-items:center;
            gap:10px;
        ">
            <span style="font-size:20px;">✅</span>
            <div>
                <strong>Success!</strong><br>
                {{ session('success') }}
                {{--  ↑ prints the flash message value --}}
            </div>
        </div>
    @endif

    {{-- Show validation errors --}}
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

    {{-- The Form --}}
    <form action="/task26/store" method="POST"
          style="max-width:500px;">
        @csrf

        {{-- Name input --}}
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

        {{-- Description input --}}
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
            ➕ Submit
        </button>

    </form>

    {{-- How flash works explanation --}}
    <div style="
        margin-top:30px;
        background:#f8fafc;
        border-radius:10px;
        padding:16px 20px;
        max-width:500px;
        font-size:13px;
        color:#64748b;
    ">
        <strong style="color:#374151;">
            💡 How Flash Message Works:
        </strong>
        <ol style="margin:8px 0 0 16px; line-height:2;">
            <li>Submit the form with valid data</li>
            <li>Controller stores flash in session</li>
            <li>redirect()->back() returns to this page</li>
            <li>Green success message appears once</li>
            <li>Refresh the page — message is gone! ✨</li>
        </ol>
    </div>

@endsection