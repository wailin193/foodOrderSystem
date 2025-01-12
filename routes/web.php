<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/index',function(){
    return view('index');
});

Route::get('/index/login', function() {
    return view('login');
});

Route::get('/index/signup', function() {
    return view('signup');
});