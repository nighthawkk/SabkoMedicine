<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/faq', function () {
    return view('faq');
});
Route::get('/terms', function () {
    return view('terms');
});

Route::get('/emails/contact', function () {
    return view('emails/contact');
});
Route::get('/emails/contact_user', function () {
    return view('emails/contact_user');
});

Route::get('/contact_us',
    ['as' => 'contact', 'uses' => 'ContactController@create']);

Route::post('/contact_us',
    ['as' => 'contact_store', 'uses' => 'ContactController@store']);

Route::get('/gallery', function () {
    return view('gallery');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::post('/donate','donatecontroller@donate');


Route::auth();



Route::get('/home', 'HomeController@index');
