<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\VisitaController;
use App\Http\Middleware\UserRulesMiddleware;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/home', [HomeController::class, 'index'])->middleware(['auth'])->name('home');

Route::controller(PessoaController::class)->group(function () {
    Route::get('/pessoa', 'index')->name('pessoa.index')->middleware(['auth']);
    
    Route::get('/pessoa/create', 'create')->name('pessoa.create')->middleware(['auth']);
    Route::post('/pessoa/store', 'store')->name('pessoa.store')->middleware(['auth']);

    Route::get('/pessoa/{id}', 'show')->name('pessoa.show')->middleware(['auth']);
    Route::get('/pessoa/exportar/{id}', 'exportarPdf')->name('pessoa.exportar')->middleware(['auth']);

    Route::get('/pessoa/{id}/edit', 'edit')->name('pessoa.edit')->middleware(['auth', UserRulesMiddleware::class]);
    Route::put('/pessoa/{id}', 'update')->name('pessoa.update')->middleware(['auth', UserRulesMiddleware::class]);

});

Route::controller(VisitaController::class)->group(function () {
    Route::get('/visita', 'index')->name('visita.index');
    
    Route::get('/visita/create', 'create')->name('visita.create');
    Route::post('/visita/store', 'store')->name('visita.store');

    Route::get('/visita/{id}', 'show')->name('visita.show');
    
    Route::get('/visita/{id}/edit', 'edit')->name('visita.edit')->middleware(['auth', UserRulesMiddleware::class]);
    Route::put('/visita/{id}', 'update')->name('visita.update')->middleware(['auth', UserRulesMiddleware::class]);

    Route::delete('/visita/{id}', 'destroy')->name('visita.destroy')->middleware(['auth', UserRulesMiddleware::class]);


});

