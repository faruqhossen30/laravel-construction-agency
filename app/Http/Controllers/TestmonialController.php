<?php

namespace App\Http\Controllers;

use App\Models\Testmonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class TestmonialController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $testmonials = Testmonial::get();
        return view('admin.testmonial.index', compact('testmonials'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.testmonial.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'client_name'=> 'required',
            'text'=> 'required',
        ]);

        $data = [
            'client_name'=> $request->client_name,
            'text'=> $request->text,
            'user_id' => Auth::user()->id
        ];

        Testmonial::create($data);
        Session::flash('create');
        return redirect()->route('testmonial.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $testmonial = Testmonial::firstWhere('id',$id);
         return view('admin.testmonial.show', compact('testmonial'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $testmonial = Testmonial::firstWhere('id',$id);
        return view('admin.testmonial.edit', compact('testmonial'));
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $request->validate([
            'client_name' => 'required',
            'text'        => 'required',
         ]);


         $data = [
          'client_name' => $request->client_name,
          'text'        => $request->text,
          'user_id'     => Auth::user()->id
         ];
         Testmonial::firstWhere('id',$id)->update($data);
         Session::flash('update');
         return redirect()->route('testmonial.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {

         Testmonial ::firstwhere('id', $id)->delete();
         Session::flash('delete');
         return redirect()->route('testmonial.index');
    }
}
