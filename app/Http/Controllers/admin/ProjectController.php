<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects=Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.project.create');
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
        Project::create([
           'title'=>$request->title,
           'body'=>$request->body,
            'image'=>$imagename,
        ]);

        alert()->success('موفق','ثبت با موفقیت انجام شد');
        $projects=Project::all();
        return view('admin.project.index', compact('projects'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {

        return view('admin.project.show' , compact('project'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        return view('admin.project.edit', compact('project'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        if ($request->has('image'))
        {
            $imagename=time().$request->file('image')->getClientOriginalName();
            $request->file('image')->move('uploads/',$imagename);
        }
        else
        {
            $imagename=$project->image;
        }
        $project->update([
           'title'=>$request->title,
           'body'=>$request->body,
            'image'=>$imagename,
        ]);

        alert()->success('موفق','ویراش با موفقیت انجام شد');

        $projects=Project::all();
        return view('admin.project.index',compact('projects'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        $project->delete();

        alert()->warning('موفق','حذف با موفقیت انجام شد');
        return redirect()->back();
    }
}
