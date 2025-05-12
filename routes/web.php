<?php

use Illuminate\Support\Facades\Route;

// Landing page
Route::view('/', 'pages.home')->name('home');