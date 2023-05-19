<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Partner;
use App\Models\Post;
use App\Models\Work;

class FrontendController extends Controller
{
    public function home()
    {
        $banners = Banner::where('status', Banner::ACTIVE)->get()->take(3);
        $partners = Partner::where('status', Partner::ACTIVE)->get();
        $latest_posts = Post::orderByDesc('id')->where('status', Post::ACTIVE)->get()->take(3);
        $latest_works = Work::orderByDesc('id')->where('status', Work::ACTIVE)->get()->take(2);
        return view('welcome', compact('banners', 'latest_posts', 'partners', 'latest_works'));
    }

    public function aboutus()
    {
        return view('about-us');
    }
    public function contactus()
    {
        return view('contact-us');
    }

    public function posts()
    {
        $posts = Post::orderByDesc('id')->where('status', Post::ACTIVE)->get();
        return view('posts', compact('posts'));
    }
    public function works()
    {
        $works = Work::orderByDesc('id')->where('status', Work::ACTIVE)->get();
        return view('works', compact('works'));
    }

    public function post(Post $post)
    {
        return view('post', compact('post'));
    }
    public function work(Work $work)
    {
        return view('work', compact('work'));
    }
    
}
