<?php

namespace App\Http\Controllers;

use App\Models\Site;
use Illuminate\Http\Request;

class HomepageController extends Controller
{
    public function homePage()
    {
        return view('homepage');
    }
    public function test()
    {
        $site = Site::first();

        return $site;
    }
}
