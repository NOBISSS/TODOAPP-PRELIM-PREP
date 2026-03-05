@extends('layouts.master')
@section('title','Student Form')
@section('heading','🧑‍🎓 Student Form')
@section('content')
    <div>
        @if (session('success'))
            <h1>{{ session('success')}}</h1>
        @endif
    <div>
        @if($errors->any())
            @foreach ($errors->all() as $error)
                <span>{{$error}}</span>
            @endforeach
        @endif
    </div>
        <form action="/task29/store" method="POST">
            @csrf
            <input type="text" name="name" placeholder="Enter Your Name"><br>
            <input type="text" name="email" placeholder="Enter Your Name"><br>
            <select id="courses" name="course">
                @if (count($courses) > 0)
                    @foreach($courses as $course)
                        <option value="{{ $course }}">{{ $course }}</option>
                    @endforeach
                @endif
            </select><br>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection