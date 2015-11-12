<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('post/{id}', function ($id) {
    return view('post');
});

Route::get('about', function () {
    return view('about');
});

Route::get('contact', function () {
    return view('contact');
});
