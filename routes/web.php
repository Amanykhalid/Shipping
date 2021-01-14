<?php

use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use App\Menu;
use App\Page;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/




Route::get('/', 'HomePage@index')->name('homePage');
Route::get('detailspage{id}', 'HomePage@Details')->name('detailspage2');
// Route::get('detailspage{id}', function ($id) {
//     $pages=Page::select('*')->where('id',$id)->first();
//         $news=Page::select('*')->where('status',1)->where('deleted',0)->where('type','news')->get();
//         $blogs=Page::select('*')->where('status',1)->where('deleted',0)->where('type','blog')->get();
//         return view('detailspage');
// })->name('detailspage2');;


Route::get('/home', 'HomeController@index')->name('home');
Route::get('bar-charts', function () {
        return view('chart');
});
Route::get('line', function () {
    return view('line');
});
Route::get('chart2', function () {
    return view('chart2');
});


