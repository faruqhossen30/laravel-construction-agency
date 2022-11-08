<?php

namespace App\Http\Controllers;

use App\Models\Settings;
use App\Models\Site;
use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function showsite()
    {
        $site = Site::first();
        return view('admin.settings.setting', compact('site'));
    }
    public function sitestore(Request $request)
    {
        // return $request->all();
        $request->validate([
            'email' => 'email'
        ]);

        Site::first()->update(
            [

                'logo'      => $request->logo,
                'mobile'    => $request->mobile,
                'email'     => $request->email,
                'phone'     => $request->phone,
                'phone2'    => $request->phone2,
                'address'   => $request->address,
                'facebook'  => $request->facebook,
                'twitter'   => $request->twitter,
                'whatsapp'  => $request->whatsapp,
                'address'   => $request->address,
                'linkedin'  => $request->linkedin,
                'instagram' => $request->instagram,
                'youtube'   => $request->youtube,
                'map'       => $request->map,
            ]
        );
        return redirect()->back();
    }
}
