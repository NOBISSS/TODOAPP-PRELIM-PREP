@extends('layouts.master')
@section('title','Odd or Even Checker')
@section('heading','Odd or Even Checker')
@section('content')
    <h1>Check Number is Even or Odd</h1>
    @if($number%2==0)
        <h1>Number is Even</h1>
    @elseif($number%2==1)
        <h1>Number is Odd</h1>
    @else
        <h1>Number is Zero</h1>
    @endif
@endsection