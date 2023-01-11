<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Offers;
use Illuminate\Http\Request;

class OffersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $offers=Offers::all();
      return view('admin.offers.index', compact('offers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('admin.offers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      Offers::create([
         'title'=>$request->title,
         'body'=>$request->body,
      ]);

        alert()->success('موفق','ثبت با موفقیت انجام شد');

        $offers=Offers::all();
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Offers $offer)
    {
       return view('admin.offers.show', compact('offer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Offers $offer)
    {
       return  view('admin.offers.edit' , compact('offer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offers $offer)
    {
        $offer->update([
           'title'=>$request->title,
           'body'=>$request->body,
        ]);

        alert()->success('موفق','ویراش با موفقیت انجام شد');

        $offers=Offers::all();
        return view('admin.offers.index',compact('offers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offers $offer)
    {
        $offer->delete();

        alert()->warning('موفق','حذف با موفقیت انجام شد');
        return redirect()->back();
    }
}
