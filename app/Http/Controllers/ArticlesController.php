<?php

namespace App\Http\Controllers;

use App\Article;
use App\Http\Requests\ArticleRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticlesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['only'=>'create']);
    }
    public function index()
    {
        $articles = Article::latest()->get();
        return view('articles.index', compact('articles'));
    }

    /**
     * @param Article $article
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        $tags = Tag::lists('name','id');
        return view('articles.create',compact('tags'));
    }
    public function store(ArticleRequest $request)
    {
        $article = Auth::user()->articles()->create($request->all());
        $article->tags()->attach($request->input('tags'));

        return redirect('articles')->with([
            'flash_message'=>'You Created The Article Successfully',
            'flash_message_important'=>true,
        ]);
    }

    public function edit(Article $article)
    {
        $tags = Tag::lists('name','id');
        return view('articles.edit', compact('article','tags'));
    }

    /**
     * @param Article $article
     * @param ArticleRequest|Requests\Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     * @internal param $id
     */
    public function update(Article $article, ArticleRequest $request)
    {
        $article->update($request->all());
        return redirect('articles');
    }


}
