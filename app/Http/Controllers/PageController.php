<?php

namespace App\Http\Controllers;

use App\Page;
use App\Lang;
use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $pages=Page::where('deleted',0)->get();
        return view('frontend.news.index',compact('pages'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('frontend.news.create')->with('langs',Lang::where('status',1)->where('deleted',0)->get());

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $req)
    {
        //
        try
        {
          $req_all = $req->except('image_short','image_long'); 
          $path=  $req->image_short->store('pages');
          $path2=  $req->image_long->store('pages');
          $req_all['image_short'] = $path;
          $req_all['image_long'] = $path2;
          Page::create($req_all);
          return redirect()->route('pages.index')->with(['success' => 'تم اضافة الصفحة بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return $ex;
            return redirect()->route('pages.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        try{
            $page=Page::find($id);
            // dd($page);
            $page->update(['deleted'=>'1']);
            return redirect()->route('pages.index')->with(['success' => 'تم حذف page بنجاح ']);
            }catch(\Exception $ex)
            {
                return redirect()->route('pages.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
    
            } 
    }
}
