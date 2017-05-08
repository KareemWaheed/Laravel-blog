@extends('app')

@section('content')
    <h1>My Articles</h1>

    @foreach($articles as $article)
        <article>
            <h2>
                <a href="{{action('ArticlesController@show',[$article->id])}}">
                    {{$article->title}}
                </a>
            </h2>
            <p>{{$article->body}}</p>
        </article>
        <hr>
    @endforeach
    <a href="{{url('/articles/create')}}" class="btn form-control btn-primary" >Create New Article</a>
@stop