<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', function () {
    return view('indexap');
});

Route::get('/index', [MainController::class, 'index']);