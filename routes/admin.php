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

Route::group(['prefix' => 'admin'], function () {

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

}
);