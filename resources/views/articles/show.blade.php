@extends('app')

@section('content')
    <h1 xmlns="http://www.w3.org/1999/html">{{$article->title}}</h1>
    <code class="bg-info">Written By: <a href="#" rel="author">{{$article->user->username}}</a></code>
    <p>{{$article->body}}</p>
    @unless($article->tags->isEmpty())
    <div class="list-group">
        Tags :
        @foreach( $article->tags as $tag)
            <a href="#" class="list-group-item">{{ $tag->name }}</a>
        @endforeach
    </div>
    @endunless
@stop