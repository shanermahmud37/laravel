<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/next', function () {
    return 'You made it to the next page!';
});

Route::get('/hello', function () {
    return view('hello');
});
