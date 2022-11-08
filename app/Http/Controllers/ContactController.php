<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Gallery;
use App\Mail\ContactMail;
use App\Models\Testmonial;
use Illuminate\Http\Request;
use App\Models\GalleryCategory;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{
    public function contactMail()
    {

        return view('contact');
    }


    public function sendMail(Request $request)
    {

        $details = [
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'massage' => $request->massage
        ];

        Mail::to('bdjob24@example.com')->send(new ContactMail($details));
        return back()->with('massage_sent', 'Your massage has been sent successfully!');
    }

    public function aboutUs(){

        $galleries   = Gallery::with('category')->get();
        $categories  = GalleryCategory::get();
        return  view('about-us',compact('galleries', 'categories'));
    }


}
