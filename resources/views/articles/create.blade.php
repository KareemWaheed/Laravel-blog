@extends('app')

@section('content')
    <h1>Create an Article</h1>
    {!! Form::open(['url'=>'articles']) !!}

    @include('articles._form',['submitButton' => 'Add Article'])

    {!! Form::close() !!}
    @include('errors.list')
@stop