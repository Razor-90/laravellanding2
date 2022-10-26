<?php

namespace App\Http\Controllers;

use App\About;
use App\Banner_2;
use App\Blog;
use App\Menus;
use App\Pages;
use App\Pricing;
use App\Services;
use App\showcase;
use App\Team;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    //
    public function execute(Request $request)
    {
        $pages = Pages::all();
        $showcase = Showcase::all();
        $services = Services::all();
        $team = Team::all();
        $about = About::all();
        $pricing = Pricing::all();
        $blog = Blog::all();
        $banner_2 = Banner_2::all();
        $menus = Menus::all();


        return view('site.index', compact('pages', 'menus', 'showcase', 'services', 'team', 'about',
        'pricing', 'blog', 'banner_2'));
    }
}
