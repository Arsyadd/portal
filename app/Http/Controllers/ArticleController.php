<?php

namespace App\Http\Controllers;

use App\Models\Page;
use App\Models\Author;
use App\Models\Article;
use App\Models\Category;
use App\Models\BannerAds;
use Illuminate\View\View;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function welcome():View
    {
        $appname = config('app.name');
        $title = config('app.name') .' | Home';
        $categories = Category::get();
        $navs = Page::select('name','title')->where('is_group','<',1)->get();
        $navsGroup = Page::select('name','title')->where('is_group','>',0)->get();
        $slider = Article::select('image','title','slug')->where('is_slider','>',0)->get();
        $author = Author::all();
        $latestArticles = Article::filter()->limit(4)->get();
        $ads = BannerAds::inRandomOrder()->where('type','=','banner')->first();
        return view('welcome', compact('title','appname','categories','navs','navsGroup','slider','author','latestArticles','ads'));
    }

    public function detail(Article $article):View
    {
        $appname = config('app.name');
        $title = config('app.name') .' | '.$article->title;
        $navs = Page::select('name','title')->where('is_group','<',1)->get();
        $navsGroup = Page::select('name','title')->where('is_group','>',0)->get();
        $ads = BannerAds::inRandomOrder()->limit(2)->where('type','=','square')->get();
        $newArticles = Article::with('category')->with('author')->orderBy('id','desc')->limit(3)->get();
        return view('articledetail',compact('article','appname','title','navs','navsGroup','ads','newArticles'));
    }

    public function list():View
    {
        $appname = config('app.name');
        $title = config('app.name') .' | Articles';
        $navs = Page::select('name','title')->where('is_group','<',1)->get();
        $categories = Category::get();
        $navsGroup = Page::select('name','title')->where('is_group','>',0)->get();
        $articles = Article::filter(request(['search','category','author']))->paginate(8)->withQueryString();
        $author = Author::filter(request(['author']))->first();
        return view('articles',compact('articles','categories','appname','title','navs','navsGroup','articles','author'));
    }
}
