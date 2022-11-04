<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use App\Models\GalleryCategory;
use App\Models\Site;
use App\Models\Testmonial;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homePage()
    {
        $galleries = Gallery::with('category')->get();
        $categories = GalleryCategory::get();
        $testmonials = Testmonial::get();

        // return $testmonials;
        return view('homepage', compact('galleries', 'categories', 'testmonials'));
    }
    public function test()
    {
        $site = Site::first();

        return $site;
    }
}
