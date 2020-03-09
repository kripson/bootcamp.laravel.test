@extends('master')

@section('title')
Welcome Page
@endsection


@section('nav-options')
    <a href = {{ url('courses') }}><li class = "cursor-pointer">Courses</li></a>
@if(!Auth::guest())
    <a href = {{ url('student_courses') }}><li  class = "cursor-pointer">Your Courses</li></a>
@endif
<li  class = "cursor-pointer">Contact</li>
@endsection


@section('content')
<div class="banner md:w-11/12 ml-auto mr-auto  h-36 grid xl:grid-cols-2">
        <div class="bannerimage">
            <img src="https://cdn.dribbble.com/users/3036385/screenshots/6694433/web_development.jpg" alt="">
        </div>
        <h1 class = "text-center  self-center text-3xl font-bold">Welcome to the Bootcamp!!
        <br>Your journey to coding expertise starts here</h1>
</div>
@endsection
