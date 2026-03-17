<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/sponsor', function () {
    return view('sponsor');
});

Route::get('/visit', function () {
    return view('visit');
});

Route::get('/adopt', function () {
    return view('adopt');
});

Route::get('/donate', function () {
    return view('donate');
});

Route::get('/foster', function () {
    return view('foster');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/230', function () {
    return view('230');
});


Route::get('/campaigns/sterilization', function () {
    return view('campaigns.sterilization');
});









