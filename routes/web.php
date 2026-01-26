<?php

use App\Http\Middleware\UserRulesMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::get('/adm', function () {
    return 'Adm';
})->middleware(UserRulesMiddleware::class);
