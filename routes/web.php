<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index']);
Route::prefix(['prefix' => 'admin', 'as' => 'admin'])->group(function () {
    Route::get('/', [WebController::class, 'dashboard'])->name('index');
    Route::get('/login', [WebController::class, 'login'])->name('login.index');
    Route::get('/logout', [WebController::class, 'logout'])->name('logout');
    Route::post('/login', [WebController::class, 'enterLogin'])->name('login');
    Route::get('/settings')->name('settings');
});
