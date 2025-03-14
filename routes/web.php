<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Front/Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});


Route::get('/beforeMiddleware', function () {
    dd('If you saw this page, means middleware failed.');
})
->middleware('exampleMiddleware')
->name('beforeMiddleware');

Route::get('/afterMiddleware', function () {
    dd('If you saw this page, means middleware success.');
})
->name('afterMiddleware');
