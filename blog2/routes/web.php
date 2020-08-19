<?php

use Illuminate\Support\Facades\Route;


Route::get('/Name/{firstName}/{lastName}','DemoController@MyName');

Route::resource('/photos', 'PhotosController');

Route::get('/', 'MyController');

Route::get('/myName','CustomController@myName');
Route::get('/myAttitude','CustomController@myAttitude');
