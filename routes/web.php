<?php

use App\Http\Controllers\PessoaController;
use App\Http\Middleware\UserRulesMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', function () {
    return view('home');
})->middleware(['auth'])->name('home');

Route::controller(PessoaController::class)->group(function () {
    Route::get('/pessoa', 'index')->name('pessoa.index');
    
    Route::get('/pessoa/create', 'create')->name('pessoa.create');
    Route::post('/pessoa/store', 'store')->name('pessoa.store');

})->middleware(['auth']);

Route::get('/adm', function () {
    return 'Adm';
})->middleware(UserRulesMiddleware::class);
