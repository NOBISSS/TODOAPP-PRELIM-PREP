@extends('layouts.master')
@section('title', 'Task 28 — index() and store()')
@section('heading', '📋 TaskController — index() and store()')
@section('content')

    <div style="display:grid; grid-template-columns:1fr 1fr; gap:24px;">

        <div>
            <h3 style="color:#475569; margin-bottom:16px;">
                ➕ Add New Task
            </h3>

            @if ($errors->any())
                <div style="
                    background:#fee2e2;
                    border-left:4px solid #ef4444;
                    padding:12px 16px;
                    border-radius:6px;
                    margin-bottom:16px;
                    color:#991b1b;
                ">
                    @foreach ($errors->all() as $error)
                        <p style="font-size:13px; margin:2px 0;">
                            ⚠️ {{ $error }}
                        </p>
                    @endforeach
                </div>
            @endif

            <form action="{{ route('tasks.store') }}" method="POST">
                @csrf

                <div style="margin-bottom:16px;">
                    <label style="
                        display:block;
                        font-weight:bold;
                        color:#374151;
                        margin-bottom:6px;
                    ">
                        Task Title
                        <span style="color:red;">*</span>
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
                        <p style="color:#ef4444; font-size:13px; margin-top:4px;">
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
                        Status
                        <span style="color:red;">*</span>
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
                        <option value="completed"
                            {{ old('status') == 'completed' ? 'selected' : '' }}>
                            ✅ Completed
                        </option>
                        <option value="inprogress"
                            {{ old('status') == 'inprogress' ? 'selected' : '' }}>
                            🔄 In Progress
                        </option>
                    </select>
                    @error('status')
                        <p style="color:#ef4444; font-size:13px; margin-top:4px;">
                            ⚠️ {{ $message }}
                        </p>
                    @enderror
                </div>

                <button type="submit" style="
                    background:#3b82f6;
                    color:white;
                    padding:10px 24px;
                    border:none;
                    border-radius:8px;
                    font-size:15px;
                    font-weight:bold;
                    cursor:pointer;
                    width:100%;
                ">
                    ➕ Add Task
                </button>

            </form>
        </div>

        <div>
            <h3 style="color:#475569; margin-bottom:16px;">
                📋 All Tasks
                <span style="
                    background:#e2e8f0;
                    color:#64748b;
                    padding:2px 10px;
                    border-radius:20px;
                    font-size:13px;
                    margin-left:8px;
                ">
                    {{ count($tasks) }}
                </span>
            </h3>

            @if (session('success'))
                <div style="
                    background:#dcfce7;
                    border-left:4px solid #22c55e;
                    padding:10px 16px;
                    border-radius:6px;
                    margin-bottom:16px;
                    color:#166534;
                    font-size:14px;
                ">
                    ✅ {{ session('success') }}
                </div>
            @endif

            @unless (count($tasks) > 0)
                <div style="
                    background:#f8fafc;
                    border:2px dashed #e2e8f0;
                    border-radius:10px;
                    padding:30px;
                    text-align:center;
                    color:#94a3b8;
                ">
                    <div style="font-size:32px; margin-bottom:8px;">📭</div>
                    <p>No tasks yet!</p>
                    <p style="font-size:13px;">Add your first task →</p>
                </div>
            @endunless

            @foreach ($tasks as $task)
                <div style="
                    background:white;
                    border:1px solid #e2e8f0;
                    border-radius:10px;
                    padding:14px 16px;
                    margin-bottom:10px;
                    display:flex;
                    justify-content:space-between;
                    align-items:center;
                ">
                    <div>
                        <p style="
                            font-weight:bold;
                            color:#1e293b;
                            margin-bottom:4px;
                        ">
                            {{ $loop->iteration }}.
                            {{ $task['title'] }}
                        </p>
                    </div>
                    @switch($task['status'])
                        @case('completed')
                            <span style="
                                background:#dcfce7;
                                color:#166534;
                                padding:4px 12px;
                                border-radius:20px;
                                font-size:12px;
                                font-weight:bold;
                            ">✅ Completed</span>
                            @break
                        @case('pending')
                            <span style="
                                background:#fef9c3;
                                color:#854d0e;
                                padding:4px 12px;
                                border-radius:20px;
                                font-size:12px;
                                font-weight:bold;
                            ">⏳ Pending</span>
                            @break
                        @case('inprogress')
                            <span style="
                                background:#dbeafe;
                                color:#1e40af;
                                padding:4px 12px;
                                border-radius:20px;
                                font-size:12px;
                                font-weight:bold;
                            ">🔄 In Progress</span>
                            @break
                    @endswitch
                </div>
            @endforeach
        </div>
    </div>
@endsection