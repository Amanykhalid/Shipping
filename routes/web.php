<?php

use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;

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




Route::get('/', function () {
    return view('index');
});
// Route::get('/langs/create', function () {
//     return view('dashboard.langs.create');
// });
// Route::get('/admins', function () {
//     return view('dashboard.users.admin');
// });
// Route::get('/supervisor', function () {
//     return view('dashboard.users.supervisor');
// });
// Route::get('/monitors', function () {
//     return view('dashboard.users.monitors');
// });
// Route::get('/user/create', function () {
//     return view('dashboard.users.create');
// });
// Route::get('/users/auth', function () {
//     return view('dashboard.users.auth-user');
// });
// Route::get('/user/edit', function () {
//     return view('dashboard.users.edit');
// });
// Route::get('/auth/edit', function () {
//     return view('dashboard.users.edit-auth');
// });
// Route::get('/auth/create', function () {
//     return view('dashboard.users.auth-create');
// });
// Route::get('/configs', function () {
//     return view('dashboard.configs.edit');
// });

// Route::get('/social', function () {
//     return view('dashboard.configs.social');
// });
// Route::get('/sliders', function () {
//     return view('dashboard.slider.index');
// });
// Route::get('/sliders/create', function () {
//     return view('dashboard.slider.create');
// });
// Route::get('/slider/edit', function () {
//     return view('dashboard.slider.edit');
// });
// Route::get('/news', function () {
//     return view('dashboard.news.index');
// });
// Route::get('/news/create', function () {
//     return view('dashboard.news.create');
// });
// Route::get('/authorities', function () {
//     return view('dashboard.users.authorities');
// });
// Route::get('/menus/create', function () {
//     return view('dashboard.menus.create');
// });
// Route::get('/tickets', function () {
//     return view('dashboard.tickets.index');
// });
// Route::get('/tickets/show', function () {
//     return view('dashboard.tickets.show');
// });
// Route::get('/tickets/create', function () {
//     return view('dashboard.tickets.create');
// });
// Route::get('/user/show', function () {
//     return view('dashboard.users.show');
// });
// Route::get('/people', function () {
//     return view('dashboard.users.people');
// });
// Route::get('/people/single', function () {
//     return view('dashboard.users.single_user');
// });
// Route::get('/reports', function () {
//     return view('dashboard.reports.index');
// });
// Route::get('/frontend', 'HomeController@index');
// Route::get('/index.html', 'HomeController@index');

// Route::get('/blog.html', 'HomeController@blog');

// Route::get('/blog-details.html', 'HomeController@blogdd');

// Route::get('/contact.html', 'HomeController@contact');

// Route::get('/tazkara.html', 'HomeController@tazkara');

// Route::get('/news.html', 'HomeController@news');
// Route::get('/create.html', 'HomeController@create_tax');
// Route::get('/create2.html', 'HomeController@register');


// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('bar-charts', 'ChartController@index');

