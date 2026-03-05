@extends('layouts.master')
@section('title','CONTACT US FORM')
@section('heading','🔭 CONTACT US FORM')
@section('content')
    @if($errors->any())
        @foreach ($errors->all() as $error)
            <span>{{ $error }}</span>
        @endforeach
    @endif
    <div>
        @if (session('submitted'))
            <h1>{{ session('contact_name')}} Thank You For Contacting Us</h1>
        @endif
        
        <form action="/task30/store" method="POST">
            @csrf
                <input type="text" name="name" placeholder="Enter Your Name"><br>
                <input type="email" name="email" placeholder="Enter Your Email"><br>
                <input type="text" name="message" placeholder="Enter Your Message"><br>
                <button type="submit">Submit</button>
        </form>
    </div>
@endsection