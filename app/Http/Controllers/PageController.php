<?php

namespace App\Http\Controllers;

use App\Http\Requests\PageRequest;
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
    function __construct()
    {
    $this->middleware('permission: الصفحات', ['only' => ['index']]);
    $this->middleware('permission:اضافة صفحة', ['only' => ['create','store']]);
    $this->middleware('permission:تعديل صفحة', ['only' => ['edit','update']]);
    $this->middleware('permission:حذف صفحة', ['only' => ['destroy']]);
    $this->middleware('permission:تغير حالة صفحة', ['only' => ['status']]);

    }

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
    public function store(PageRequest $req)
    {
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
    public function edit($id)
    {
        $page=Page::find($id);
        // dd($page);
        if (!$page)
            return redirect()->route('pages.index')->with(['error' => 'هذه الصفحة غير موجود ']);

        return view('frontend.news.edit',compact('page'))->with('langs',Lang::where('status',1)->where('deleted',0)->get());;

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function update(PageRequest $req,$id)
    {
        try
        {
            $page=Page::find($id);

            if (!$page)
                return redirect()->route('sliders.index')->with(['error' => 'هذه الصفحة غير موجود ']);

            $req_all = $req->except(['image_short','pageId','image_long']);
            if($req->image_short != null)
            {
                $path=  $req->image_short->store('pages');
                $req_all['image_short'] = $path;
            }
            if($req->image_long != null)
            {
                $path2=  $req->image_long->store('pages');
                $req_all['image_long'] = $path2;
            }
            $page->update($req_all);
            return redirect()->route('pages.index')->with(['success' => ' تم تعديل  الصفحة بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('pages.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $page=Page::find($id);
            // dd($page);
            $page->update(['deleted'=>'1']);
            return redirect()->route('pages.index')->with(['success' => 'تم حذف page بنجاح ']);
        }
        catch(\Exception $ex)
        {
           return redirect()->route('pages.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        } 
    }

     // change Page Status
     public function changStatus($id)
     {
         try
         {
             $page = Page::find($id);
             if (!$page)
                 return redirect()->route('pages.index')->with(['error' => 'هذه الصفحة غير موجود ']);
 
             $status =  $page->status  == 0 ? 1 : 0;
 
             $page->update(['status' =>$status ]);
 
             return redirect()->route('pages.index')->with(['success' => ' تم تغيير الحالة بنجاح ']);
         }
         catch (\Exception $ex)
         {
             return redirect()->route('pages.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
         }
     }


}
