<?php

namespace App\Http\Controllers;

use App\Http\Requests\MenuRequest;
use App\Lang;
use App\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $menus=Menu::where('deleted',0)->get();
        return view('frontend.menus.index',compact('menus'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('frontend.menus.create')->with('langs',Lang::where('status',1)->where('deleted',0)->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(MenuRequest $req)
    {
        try
        {
          
          Menu::create($req->all());
          return redirect()->route('menu.index')->with(['success' => 'تم اضافة القائمة بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return $ex;
            return redirect()->route('menu.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function show(Menu $menu)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $menu=Menu::find($id);
        if (!$menu)
            return redirect()->route('menu.index')->with(['error' => 'هذه القائمة غير موجود ']);

        return view('frontend.menus.edit',compact('menu'))->with('langs',Lang::where('status',1)->where('deleted',0)->get());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function update(MenuRequest $req, $id)
    {
        try
        {
            $menu=Menu::find($id);

            if (!$menu)
                return redirect()->route('menu.index')->with(['error' => 'هذه القائمة غير موجود ']);

            $menu->update($req->all());
            return redirect()->route('menu.index')->with(['success' => ' تم تعديل  القائمة بنجاح ']);
        }
        catch(\Exception $ex)
        {
            return redirect()->route('menu.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Menu  $menu
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try
        {
            $page=Menu::find($id);
            $page->update(['deleted'=>'1']);
            return redirect()->route('menu.index')->with(['success' => 'تم حذف القائمة بنجاح ']);
        }
        catch(\Exception $ex)
        {
           return redirect()->route('menu.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
        } 
    }

     // change menu Status
     public function changStatus($id)
     {
         try
         {
             $menu = Menu::find($id);
             if (!$menu)
                 return redirect()->route('menu.index')->with(['error' => 'هذه القائمة غير موجود ']);
 
             $status =  $menu->status  == 0 ? 1 : 0;
 
             $menu->update(['status' =>$status ]);
 
             return redirect()->route('menu.index')->with(['success' => ' تم تغيير الحالة بنجاح ']);
         }
         catch (\Exception $ex)
         {
             return redirect()->route('menu.index')->with(['error' => 'حدث خطا ما برجاء المحاوله لاحقا']);
         }
     }

}
