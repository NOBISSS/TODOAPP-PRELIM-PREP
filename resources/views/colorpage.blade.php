@extends('layouts.master')
@section('title','Change Color of Page')
@section('heading','Change Color of Page')
@section('content')
    <div style="background-color:{{ $color }};">ABCD</div>
@endsection