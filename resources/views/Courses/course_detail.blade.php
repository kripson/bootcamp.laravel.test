@extends('master')
@section('title')
    Laravel Course
    @endsection

@section('headlinks')
    <link rel="stylesheet" href = "{{asset('css/course_detail.css')}}">
@section('content')
    <div class="grid course-detail md:grid-cols-2 md:w-9/12 gap-10  mt-16 ml-auto mr-auto justify-center">
        <iframe class = "lessonplayer" width="560" height="315" src="" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <p class="text-lesson"></p>
        <img class = "courseimage" src= '{{$course->imageUrl}}' alt = "course image"/>


        <div class="sectionscontainer">

        @if(!$enrolled)
                <div class="coursepreviewsection grid">
                <h4 class="text-center border-bottom">Preview this course</h4>
                <iframe class = "coursepreview" width="350" height="250" src="https://www.youtube.com/embed/0AIjZJ2vqlM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                <a class=" ml-auto mr-auto mt-4" href="{{url('/courses/buy/'.$course->id)}}"><button class="p-4 rounded transition duration-500 ease-in-out transform hover:scale-105 self-end bg-orange-400 text-white text-2xl">Buy the Course $ {{$course->price}}</button></a>
                </div>
        @else
            <h4 class="text-center border-bottom">Course Content</h4>
            <div class="sections">

                @foreach($sections as $section)
                    @if($section->content_type == 'video')
                        <p class="font-bold" data-content="{{$section->content}}" onclick='displayVideoLesson()'>Section {{$section->id}}:  {{$section->title}}</p>
                    @else
                        <p class="font-bold" data-content="{{$section->content}}" onclick='displayTextLesson()'>Section {{$section->id}}: {{$section->title}}</p>
                    @endif

                @endforeach
            </div>
        @endif
        </div>


        <div class="description grid">
            <h1 class="title font-bold text-orange-600 text-3xl">{{$course->name}}</h1>
            <h5>{{$course->description}}</h5>

        </div>


    </div>
@endsection



