<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index']);
Route::get('/login', [WebController::class, 'login'])->name('login.index');
Route::post('/login', [WebController::class, 'enterLogin'])->name('login');

Route::prefix('admin', ['as' => 'admin'])->group(function () {
    Route::get('/', [WebController::class, 'dashboard'])->name('index');
    Route::get('/logout', [WebController::class, 'logout'])->name('logout');
    Route::get('/settings')->name('settings');
});
