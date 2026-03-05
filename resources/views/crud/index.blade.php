@extends('layouts.master')

@section('title', 'All Tasks')

@section('heading', '📋 All Tasks')

@section('content')

    {{-- Success message --}}
    @if (session('success'))
        <div style="
            background:#dcfce7;
            border-left:4px solid #22c55e;
            padding:12px 20px;
            border-radius:8px;
            margin-bottom:20px;
            color:#166534;
            font-weight:bold;
        ">
            ✅ {{ session('success') }}
        </div>
    @endif

    {{-- Add new task button --}}
    <div style="margin-bottom:20px;">
        <a href="{{ route('tasks.create') }}" style="
            background:#3b82f6;
            color:white;
            padding:10px 20px;
            border-radius:8px;
            text-decoration:none;
            font-weight:bold;
            font-size:15px;
        ">
            ➕ Add New Task
        </a>
    </div>

    {{-- No tasks message --}}
    @unless (count($tasks) > 0)
        <div style="
            background:#f8fafc;
            border:2px dashed #e2e8f0;
            border-radius:10px;
            padding:40px;
            text-align:center;
            color:#94a3b8;
        ">
            <div style="font-size:40px;">📭</div>
            <p style="margin-top:10px; font-size:16px;">
                No tasks yet!
            </p>
            <a href="{{ route('tasks.create') }}"
               style="color:#3b82f6;">
                Add your first task
            </a>
        </div>
    @endunless

    {{-- Tasks table --}}
    @if (count($tasks) > 0)
        <table border="1" cellpadding="12"
               cellspacing="0" style="width:100%;">
            <tr style="background:#f8fafc;">
                <th>#</th>
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Created</th>
                <th>Actions</th>
            </tr>

            @foreach ($tasks as $task)
                <tr style="
                    background:{{ $loop->even ? '#f8fafc' : 'white' }};
                ">
                    <td>{{ $loop->iteration }}</td>

                    <td style="font-weight:bold;">
                        {{ $task->title }}
                        {{--     ↑ object syntax for DB models --}}
                    </td>

                    <td style="color:#64748b; font-size:14px;">
                        {{ Str::limit($task->description, 40) }}
                        {{--  ↑ limits text to 40 chars --}}
                    </td>

                    <td>
                        @switch($task->status)
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
                    </td>

                    <td style="font-size:13px; color:#94a3b8;">
                        {{ $task->created_at->format('d M Y') }}
                        {{--                  ↑ format date nicely --}}
                    </td>

                    <td>
                        <div style="display:flex; gap:8px;">

                            {{-- Edit button --}}
                            <a href="{{ route('tasks.edit', $task->id) }}"
                               style="
                                background:#f59e0b;
                                color:white;
                                padding:6px 14px;
                                border-radius:6px;
                                text-decoration:none;
                                font-size:13px;
                                font-weight:bold;
                               ">
                               ✏️ Edit
                            </a>

                            {{-- Delete button --}}
                            <form
                                action="{{ route('tasks.destroy', $task->id) }}"
                                method="POST"
                                onsubmit="return confirm('Delete this task?')"
                            >
                                @csrf
                                @method('DELETE')
                                {{-- ↑ HTML forms only support GET/POST --}}
                                {{-- @method('DELETE') spoofs DELETE method --}}
                                <button type="submit" style="
                                    background:#ef4444;
                                    color:white;
                                    padding:6px 14px;
                                    border-radius:6px;
                                    border:none;
                                    font-size:13px;
                                    font-weight:bold;
                                    cursor:pointer;
                                ">
                                    🗑️ Delete
                                </button>
                            </form>

                        </div>
                    </td>
                </tr>
            @endforeach

        </table>
    @endif

@endsection