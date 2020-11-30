<?php

use Illuminate\Support\Facades\Route;

Route::get('{any}', function () {
    return view('layout/app');
})->where('any', '.*');
