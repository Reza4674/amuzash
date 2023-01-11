<?php

namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Offers;
use App\Models\Post;
use App\Models\Project;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function about()
    {
        $abouts=About::latest()->take(1)->get();
        $comments=Comment::where('is_active' , 1)->get();
        return view('site.about' , compact('abouts', 'comments'));
    }

    public function blog()
    {
        $categories=Category::all();
        $posts=Post::all();
        return view('site.blog',compact('categories', 'posts'));
    }

    public function singleBlog()
    {
        $categories=Category::all();
        $posts=Post::all();
        return view('site.singleBlog',compact('categories', 'posts'));
    }

    public function index()
    {
        $projects=Project::all();
        $comments=Comment::all();
        $abouts=About::latest()->take(1)->get();
        $offers=Offers::all();
        return view('site.index', compact('projects' , 'comments' , 'abouts' , 'offers'));
    }

    public function project()
    {
        $projects=Project::all();
        return view('site.projects' , compact('projects'));
    }

    public function offer()
    {
        $offers=Offers::all();
        $comments=Comment::all();
        return view('site.offer' , compact('offers', 'comments'));
    }

    public function contact()
    {
        $abouts=About::latest()->take(1)->get();
        return view('site.contact' , compact('abouts'));
    }
}
