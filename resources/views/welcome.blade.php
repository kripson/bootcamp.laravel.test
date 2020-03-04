@extends('master')

@section('title')
Welcome Page
@endsection


@section('nav-options')
<li class = "cursor-pointer">Courses</li>
@if(!Auth::guest())
<li  class = "cursor-pointer">Your Courses</li>
@endif
<li  class = "cursor-pointer">Contact</li>
<li class = "cursor-pointer "><a href = '{{url('home')}}'>Sign In</a></li>
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
