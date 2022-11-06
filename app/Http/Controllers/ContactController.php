<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;


class ContactController extends Controller
{
   public function contactMail(){

     return view('contact');

   }


   public function sendMail(Request $request){

        $details =[
            'name'    => $request->name,
            'email'   => $request->email,
            'subject' => $request->subject,
            'massage' => $request->massage
        ];

        Mail::to('bdjob24@example.com')->send(new ContactMail( $details));
        return back()->with('massage_sent','Your massage has been sent successfully!');
   }
}
