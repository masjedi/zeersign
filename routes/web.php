<?php

use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	/** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
	
    Route::get('contactus','PagesController@contact');
});

Route::get('/', function () {
    return view('frontend.index');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::group(['namespace'=>'Admin'], function (){
    Route::get('/dashboard','PagesController@index');
    Route::resource('/news','BlogController');
    Route::resource('/events','EventController');
    Route::resource('/careers','CareerController');
    Route::resource('/videos','VideoController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/team','TeamController');
    Route::resource('/bids','BidController');
});

