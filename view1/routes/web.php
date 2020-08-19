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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', 'HomeController@Home');

Route::get('/twenty', function(){
    return view('TwentyFiveView');
});

Route::get('/about', 'HomeController@About');
Route::get('/menu', 'HomeController@Menu');

Route::get('/subview', function(){
    return view('Subview');
});
