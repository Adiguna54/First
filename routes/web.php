<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/1', function () {
    return view('datang', ["data"=>'wow']);
});

Route::get('/2', function(){
    return view('tesalpine');
});