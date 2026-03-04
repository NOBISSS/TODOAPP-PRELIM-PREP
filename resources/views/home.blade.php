@extends('layouts.master')
@section('title','Home-TodoApp')
@section('heading','Welcome to TodoApp')

@section('content')
<p style="color:#64748b; font-size:16px; margin-bottom:20px;">
        This is a To-Do List app built with Laravel.
        Demonstrating master layout with yield, section and extends.
    </p>

    <div style="display:grid; grid-template-columns:repeat(3,1fr); gap:16px;">

        <div style="background:#dbeafe; padding:20px; border-radius:10px; text-align:center;">
            <div style="font-size:32px;">📋</div>
            <h3 style="color:#1e40af; margin:8px 0;">Tasks</h3>
            <p style="color:#3b82f6; font-size:13px;">Manage your daily tasks</p>
        </div>

        <div style="background:#dcfce7; padding:20px; border-radius:10px; text-align:center;">
            <div style="font-size:32px;">✅</div>
            <h3 style="color:#166534; margin:8px 0;">Complete</h3>
            <p style="color:#16a34a; font-size:13px;">Track completed tasks</p>
        </div>

        <div style="background:#fef9c3; padding:20px; border-radius:10px; text-align:center;">
            <div style="font-size:32px;">⏳</div>
            <h3 style="color:#854d0e; margin:8px 0;">Pending</h3>
            <p style="color:#ca8a04; font-size:13px;">View pending tasks</p>
        </div>

    </div>
@endsection