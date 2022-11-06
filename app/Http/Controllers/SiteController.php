<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function showSetting(){
         $settings = Settings::first();
         return view('admin.settings.setting',compact('settings'));
    }
    public function settingsInformation(Request $request){

           $request->validate([
           'email' => 'email'
           ]);
        Settings::updateOrInsert([
        'id' => 1
        ], [
        'facebook'       => $request->facebook,
        'facebook_group' => $request->facebook_group,
        'twitter'        => $request->twitter,
        'instagram'      => $request->instagram,
        'youtube'        => $request->youtube,
        'linkedin'       => $request->linkedin,
        'phone'          => $request->phone,
        'mobile'         => $request->mobile,
        'email'          => $request->email,
        'address'        => $request->address,
        'mobile_alt'     => $request->mobile_alt,
        ]);
     return redirect()->back();
    }
}
