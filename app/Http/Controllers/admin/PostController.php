<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts=Post::all();
      return view('admin.posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.posts.create',  compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imagename=time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move('uploads/',$imagename);
        Post::create([
            'category_id'=>$request->category_id,
            'alt'=>$request->alt,
            'image'=>$imagename,
            'title'=>$request->title,
            'body'=>$request->body,
            'writer'=>$request->writer,
        ]);
        alert()->success('موفق','ثبت با موفقیت انجام شد');

        $posts=Post::all();
        return view('admin.posts.index',compact('posts'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
       return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        $categories=Category::all();
        return view('admin.posts.edit', compact('post' , 'categories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        if ($request->has('image')){
            $imagename=time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/',$imagename);
        }
        else{
            $imagename=$post->image;
        }

      $post->update([
        'category_id'=>$request->category_id,
          'image'=>$imagename,
          'title'=>$request->title,
          'writer'=>$request->writer,
          'body'=>$request->body,
      ]);

        alert()->success('موفق','ویراش با موفقیت انجام شد');

        $posts=Post::all();
        return view('admin.posts.index',compact('posts'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();

        alert()->warning('موفق','حذف با موفقیت انجام شد');
        return redirect()->back();
    }
}
