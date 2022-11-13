<?php

namespace App\Http\Controllers;

use Illuminate\Support\Collection;

use App\Models\Blog;
use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Site;
use App\Models\Testmonial;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homePage()
    {
        $galleries   = Gallery::with('category')->get();
        $categories  = GalleryCategory::get();
        $testmonials = Testmonial::get();
        $blogs       = Blog::latest()->take(5)->get();

        $latest1     = collect($blogs)->slice(0, 2);
        $latest2     = collect($blogs)->slice(-3, 3);
        // $latest2  = collect($blogs)->slice(2, 5);
        // return $latest1;

        // return $blogs;
        return view('homepage', compact('galleries', 'categories', 'blogs', 'latest1', 'latest2', 'testmonials'));
    }
    public function test()
    {
        // $site = Site::first();
        // return $site;
    }
}
