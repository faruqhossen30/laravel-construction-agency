<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $users = User::latest()->get();
       return view('admin.user.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       $user = User::all();
       return view('admin.user.create',compact('user'));
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
              'name'     => 'required',
              'email'    => 'required',
              'password' => 'required',
              ]);

              $data = [
                'name'     => $request->name,
                'email'    => $request->email,
                'password' => Hash::make($request->password)
              ];
              User::create($data);
              Session::flash('create');
              return redirect()->route('user.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $user = User::firstWhere('id',$id);
         return view('admin.user.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $user = User::firstWhere('id',$id);
         return view('admin.user.edit', compact('user'));
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
        'name' => 'required',
        'email' => 'required',
        'password' => 'required',
        ]);


        $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password)
        ];
        User::firstWhere('id',$id)->update($data);
        Session::flash('update');
        return redirect()->route('user.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       User ::firstwhere('id', $id)->delete();
       Session::flash('delete');
       return redirect()->route('user.index');
    }
}
