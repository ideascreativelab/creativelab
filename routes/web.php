<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('indexap');
});

Route::get('/index', function () {
    return view('indexap');
});
