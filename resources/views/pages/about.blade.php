@extends('app')
@section('header')
    <h1>This is my Header</h1>
@stop
@section('content')

    <h1>Welcome Here</h1>


    <h1>YOu arn;t Welcome</h1>
    @if(count($people))
        <h3>My List</h3>
        <ul>
            @foreach($people as $person)
                <li>{{$person}}</li>
            @endforeach
        </ul>
    @else
        <h3>You Dont have list</h3>
    @endif
    <p>This is the content of the page This is the content of the page This is the content of the page This is the
        content of the page This is the content of the page This is the content of the page This is the content of the
        page </p>
@stop


