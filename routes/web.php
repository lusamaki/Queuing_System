<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::get('/starterPage', function () {
    return view('starterPage');
});

Route::get('/test', function () {
    return 'Route is working!';
});


