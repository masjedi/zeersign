<?php

use Illuminate\Support\Facades\Route;
Auth::routes();
Route::group(
    [
        'namespace' => 'Admin',
        'prefix' => LaravelLocalization::setLocale().'/admin',
        'middleware' => [
            'localeSessionRedirect',
            'localizationRedirect',
            'localeViewPath' ]
    ],function (){
    Route::get('dashboard','PagesController@index');
    Route::resource('news','BlogController');
    Route::resource('events','EventController');
    Route::resource('/careers','CareerController');
    Route::resource('/videos','VideoController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/team','TeamController');
    Route::resource('/bids','BidController');
    Route::resource('/types','TypeController');
});






Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::get('/','PagesController@index');
});


