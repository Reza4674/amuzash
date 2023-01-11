<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutConntroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts=About::all();
        return view('admin.about.index', compact('abouts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.about.create');
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
            'title'=>'required',
            'body'=>'required',
        ]);
        $imagename=time().$request->file('image')->getClientOriginalName();
        $request->file('image')->move('uploads/',$imagename);
        About::create([
            'name'=>$request->name,
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$imagename,
            'Date_of_birth'=>$request->Date_of_birth,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'address'=>$request->address,
        ]);
        alert()->success('موفق','ثبت با موفقیت انجام شد');
        $abouts=About::all();
        return view('admin.about.index', compact('abouts'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(About $about)
    {
        return view('admin.about.show', compact('about'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(About $about)
    {
       return view('admin.about.edit', compact('about'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, About $about)
    {
    if ($request->has('image')){
    $imagename=time().$request->file('image')->getClientOriginalName();
    $request->file('image')->move('uploads/',$imagename);
    }
    else{
    $imagename=$about->image;
}
        $about->update([
            'name'=>$request->name,
            'title'=>$request->title,
            'body'=>$request->body,
            'image'=>$imagename,
            'Date_of_birth'=>$request->Date_of_birth,
            'phone_number'=>$request->phone_number,
            'email'=>$request->email,
            'address'=>$request->address,
        ]);

        alert()->success('موفق','ویراش با موفقیت انجام شد');

        $abouts=About::all();
        return view('admin.about.index',compact('abouts'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(About $about)
    {
        $about->delete();

        alert()->warning('موفق','حذف با موفقیت انجام شد');
        return redirect()->back();
    }
}
