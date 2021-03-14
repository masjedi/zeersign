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
    Route::get('dashboard','PagesController@index')->name('dashboard');
    Route::resource('news','BlogController');
    Route::resource('events','EventController');
    Route::resource('/careers','CareerController');
    Route::resource('/videos','VideoController');
    Route::resource('/gallery','GalleryController');
    Route::resource('/team','TeamController');
    Route::resource('/bids','BidController');
    Route::resource('/types','TypeController');
    Route::resource('/categories','CategoryController');
    Route::resource('/competitions','CompetitionsController');

});

Route::post('change-status', 'Admin\EventController@ChangeStatus');
Route::post('status-change', 'Admin\CompetitionsController@StatusChange');





Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
	Route::get('/','PagesController@index');
	Route::get('/about','PagesController@aboutus');
	Route::get('/contact','PagesController@contactus');
	Route::get('/overview','PagesController@overview');
	Route::get('/whoweare','PagesController@whoweare');
	Route::get('/whatwedo','PagesController@whatwedo');
	Route::get('/donate_button','PagesController@donate_form');
	Route::get('/blog_news','PagesController@blogs');
	Route::get('/blog_single/{id}','PagesController@blog_details');
	Route::get('/event_details/{id}','PagesController@event_details');
	Route::get('/competition_details/{id}','PagesController@compet_details');
	Route::get('/gallery','PagesController@gallery');
	Route::get('/videos','PagesController@videos');
    //Index Form and Contact Form routes
    Route::post('/vulanteer','PagesController@indexform')->name('indexForm');

});


