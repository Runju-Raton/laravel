<?php

use Illuminate\Support\Facades\Route;

Route::get('/greetings', function(){
    return "Hello World, I am Runju Raton!";
});

Route::get('/home', function(){
    return view('Homepage');
});


Route::get('/about', function(){
    return view('Aboutpage');
});

Route::get('/', 'MyController');


