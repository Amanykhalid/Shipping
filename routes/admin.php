<?php

use App\Http\Controllers\SliderController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


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
// Auth::routes();

    Route::get('login','LoginController@getLogin')->name('get.admin.login');
    Route::post('login','LoginController@Login')->name('admin.login');


Route::get('logout',  function () {
    Auth::logout();        
    return Redirect('/login');    
})->name('admin.logout');

Route::group(['prefix' => 'admin','middleware'=>['auth']], function () {
    Route::get('/', function () {
        return view('dashboard.index');
    })->name('admin.dashboard');

    Route::resource('/sliders', 'SliderController');
    Route::get('/sliders/changStatus/{id}', 'SliderController@changStatus')->name('sliders.status');


    Route::resource('/langs', 'langController');
    Route::get('/langs/changStatus/{id}', 'langController@changStatus')->name('langs.status');


    Route::resource('/pages', 'PageController');
    Route::get('/pages/changStatus/{id}', 'PageController@changStatus')->name('pages.status');

    Route::resource('/menu', 'MenuController');
    Route::get('/menu/changStatus/{id}', 'MenuController@changStatus')->name('menu.status');

    Route::resource('/offers', 'OfferController');
    Route::get('/offers/changStatus/{id}', 'OfferController@changStatus')->name('offers.status');

    Route::resource('/contact', 'ContactController');
    Route::get('/contact/changStatus/{id}', 'ContactController@changStatus')->name('contact.status');

    Route::resource('roles','RoleController');

    Route::resource('users','UserController');
    Route::get('/users/changStatus/{id}', 'UserController@changStatus')->name('users.status');


}
);