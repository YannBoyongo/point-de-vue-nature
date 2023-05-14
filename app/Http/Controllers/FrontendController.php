<?php

namespace App\Http\Controllers;

use App\Models\Banner;
use App\Models\Partner;
use App\Models\Post;

class FrontendController extends Controller
{
    public function home()
    {
        $banners = Banner::where('status', Banner::ACTIVE)->get()->take(3);
        $partners = Partner::where('status', Partner::ACTIVE)->get();
        $latest_posts = Post::where('status', Post::ACTIVE)->get()->take(3);
        return view('welcome', compact('banners', 'latest_posts', 'partners'));
    }

    public function aboutus()
    {
        return view('about-us');
    }
    public function contactus()
    {
        return view('contact-us');
    }
}
