@extends('layouts')

@section('content')

    {{-- url   --}}
    <a href="{{url('student/info13')}}">url()</a>
    <br>
    <a href="{{action('StudentController@info13')}}">action()</a>
    <br>
    <a href="{{route('info13')}}">route()</a>

@stop


