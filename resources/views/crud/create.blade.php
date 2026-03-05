@extends('layouts.master')

@section('title', 'Add New Task')

@section('heading', 'Add New Task')

@section('content')

    {{-- Validation errors --}}
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

    <form action="{{ route('tasks.store') }}"
          method="POST" style="max-width:500px;">
        @csrf

        {{-- Title --}}
        <div style="margin-bottom:20px;">
            <label style="
                display:block;
                font-weight:bold;
                color:#374151;
                margin-bottom:6px;
            ">
                Task Title <span style="color:red;">*</span>
            </label>
            <input
                type="text"
                name="title"
                value="{{ old('title') }}"
                placeholder="Enter task title..."
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid {{ $errors->has('title') ? '#ef4444' : '#e2e8f0' }};
                    border-radius:8px;
                    font-size:15px;
                "
            >
            @error('title')
                <p style="color:#ef4444; font-size:13px; margin-top:6px;">
                    ⚠️ {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Description --}}
        <div style="margin-bottom:20px;">
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
                placeholder="Enter task description..."
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

        {{-- Status --}}
        <div style="margin-bottom:24px;">
            <label style="
                display:block;
                font-weight:bold;
                color:#374151;
                margin-bottom:6px;
            ">
                Status <span style="color:red;">*</span>
            </label>
            <select
                name="status"
                style="
                    width:100%;
                    padding:10px 14px;
                    border:2px solid {{ $errors->has('status') ? '#ef4444' : '#e2e8f0' }};
                    border-radius:8px;
                    font-size:15px;
                    background:white;
                "
            >
                <option value="">-- Select Status --</option>
                <option value="pending"
                    {{ old('status') == 'pending' ? 'selected' : '' }}>
                    ⏳ Pending
                </option>
                <option value="inprogress"
                    {{ old('status') == 'inprogress' ? 'selected' : '' }}>
                    🔄 In Progress
                </option>
                <option value="completed"
                    {{ old('status') == 'completed' ? 'selected' : '' }}>
                    ✅ Completed
                </option>
            </select>
            @error('status')
                <p style="color:#ef4444; font-size:13px; margin-top:6px;">
                    ⚠️ {{ $message }}
                </p>
            @enderror
        </div>

        {{-- Buttons --}}
        <div style="display:flex; gap:12px;">
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
                💾 Save Task
            </button>

            <a href="{{ route('tasks.index') }}" style="
                background:#e2e8f0;
                color:#334155;
                padding:12px 24px;
                border-radius:8px;
                text-decoration:none;
                font-size:16px;
                font-weight:bold;
            ">
                ← Cancel
            </a>
        </div>

    </form>

@endsection