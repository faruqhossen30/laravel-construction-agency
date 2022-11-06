<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $blogs = Blog::get();
        return view('admin.blogs.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.blogs.create');
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
          'title'       => 'required',
          'description' => 'required',
          ]);

          $blogimage= null;
          if ($request->file('blog_image')) {
          $imagethumbnail = $request->file('blog_image');
          $extension      = $imagethumbnail->getClientOriginalExtension();
          $blogimage      = Str::uuid() . '.' . $extension;
          Image::make($imagethumbnail)->save('admin/uploads/blog/' . $blogimage);
          }
          $data = [
          'title'       => $request->title,
          'slug'        => $request->title,
          'description' => $request->description,
          'user_id'     => Auth::user()->id,
          'blog_image'  => $blogimage,


          ];
          Blog::create($data);
          Session::flash('create');
          return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $blog = Blog::firstWhere('id',$id);
         return view('admin.blogs.show', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $blog = Blog::firstWhere('id',$id);

       return view('admin.blogs.edit', compact('blog'));
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
         'title'       => 'required',
         'description' => 'required',
         ]);

         $blogimage= null;
         if ($request->file('blog_image')) {
         $imagethumbnail = $request->file('blog_image');
         $extension      = $imagethumbnail->getClientOriginalExtension();
         $blogimage      = Str::uuid() . '.' . $extension;
         Image::make($imagethumbnail)->save('admin/uploads/blog/' . $blogimage);
         }
         $data = [
         'title'       => $request->title,
         'slug'        => $request->title,
         'description' => $request->description,
         'user_id'     => Auth::user()->id,
         'blog_image'  => $blogimage,


         ];
         Blog::firstWhere('id',$id)->update($data);
         Session::flash('update');
         return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         $file  = Blog::firstwhere('id', $id)->thumbnail;
         if($file){
         Storage::disk('public')->delete('admin/uploads/blog/' . $file);
         }
         Blog   ::firstwhere('id', $id)->delete();
         Session::flash('delete');
         return redirect()->route('blog.index');
    }
}
