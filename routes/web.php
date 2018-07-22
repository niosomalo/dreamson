<?php

Route::get('/', function () {
    return view('page.home');
});

Route::get('/about', function () {
    return view('page.about');
});

Route::get('/custom-made', function () {
    return view('page.custom-made');
});

Route::get('/galeri', function () {
    return view('page.galeri');
});

