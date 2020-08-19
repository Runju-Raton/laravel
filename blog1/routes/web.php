<?php

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

/* Route::get('/', function(){
    return view ('HomePage');
});

Route::get('/about', function(){
    return view ('AboutPage');
});

Route::get('/contact', function(){
    return view ('ContactPage');
}); */


Route::get('/', 'SiteController@Home');

Route::get('/about', 'SiteController@About');

Route::get('/contact', 'SiteController@Contact');