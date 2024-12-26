<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function __invoke(Page $page)
    {
        $appname = config('app.name');
        $title = config('app.name') .' | '.$page->title;
        $navs = Page::select('name','title')->where('is_group','<',1)->get();
        $navsGroup = Page::select('name','title')->where('is_group','>',0)->get();
        return view('pagedetail',compact('page','appname','title','navs','navsGroup'));
    }

}
