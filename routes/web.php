<?php

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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/templates', function () {
    return view('templates');
});

/*Route::get('/gallery', function () {
    return view('gallery');
});*/

Route::get('/portfolio', function () {
    return view('portfolio');
});

Route::get('/pricing', function () {
    return view('pricing');
});

Route::get('/news', 'NewsController@index');

Route::get('/team', function () {
    return view('team');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::post('/contact/save', 'ContactController@save');

Route::get('/gallery', 'GalleryController@index');
