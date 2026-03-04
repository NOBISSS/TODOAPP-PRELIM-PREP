@extends('layouts.master')
@section('title','FORM 25')
@section('heading','FORM 25')
@section('content')
@foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
@endforeach
    <form action="/task25/store" method="POST" class="flex flex-col gap-2">
        @csrf
        <input type="text" name="title" placeholder="Enter Title">
        <input type="text" name="description" placeholder="Enter Description">
        <button type="submit">Submit</button>
    </form>
@endsection
