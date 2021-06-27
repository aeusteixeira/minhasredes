<?php

use App\Http\Controllers\WebController;
use Illuminate\Support\Facades\Route;


Route::get('/', [WebController::class, 'index'])->name('index');
Route::get('/login', [WebController::class, 'login'])->name('login.index');
Route::post('/login', [WebController::class, 'authenticate'])->name('login');

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', [WebController::class, 'dashboard'])->name('index');
    Route::get('/logout', [WebController::class, 'logout'])->name('logout');
    Route::get('/settings')->name('settings');
});
