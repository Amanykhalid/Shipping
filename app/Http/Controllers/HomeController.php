<?php

namespace App\Http\Controllers;
use File;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return File::get(public_path() . '/index.html');
  
    }
    public function blog(){
        return File::get(public_path() . '/blog.php');
    }
   
    public function  blogdd(){
        return File::get(public_path() . '/blog-details.php');
    }
    public function  contact(){
        return File::get(public_path() . '/contact.php');
    }
    public function  tazkara(){
        return File::get(public_path() . '/tazkara.php');
    }
    public function  news(){
        return File::get(public_path() . '/news.php');
    }
    public function  create_tax(){
        return File::get(public_path() . '/create_tax.php');
    }
    public function  register(){
        return File::get(public_path() . '/register.php');
    }

    
}
