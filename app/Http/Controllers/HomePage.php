<?php

namespace App\Http\Controllers;

use App\Menu;
use App\Page;
use Illuminate\Http\Request;

class HomePage extends Controller
{
    //
    public function index()
    {
        # code...
        $menus=Menu::select('*')->where('status',1)->where('deleted',0)->orderby('order','asc')->get();
        $news=Page::select('*')->where('status',1)->where('deleted',0)->where('type','news')->get();
        $blogs=Page::select('*')->where('status',1)->where('deleted',0)->where('type','blog')->get();
        return view('index',compact('menus','news','blogs'));
    }
    public function Details($id)
    {
        
        # code...
        $page=Page::select('*')->where('id',$id)->first();
        $news=Page::select('*')->where('status',1)->where('deleted',0)->where('type','news')->get();
        $blogs=Page::select('*')->where('status',1)->where('deleted',0)->where('type','blog')->get();
        return view('detailspage',compact('page','news','blogs'));

    }
}
